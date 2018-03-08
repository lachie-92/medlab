<?php
namespace App\Http\Controllers;

use App\Http\Requests\ShoppingCartCheckoutRequest;
use App\Http\Requests\ShoppingCartDigitalOrderRequest;
use App\Http\Requests\ShoppingCartDigitalReceipt;
use App\Http\Requests\ShoppingCartUpdateAddressRequest;
use App\Medlab\Billing\BillingInterface;
use App\Medlab\Mailer\MedlabMailer;
use App\Medlab\ShoppingCart\ShoppingCart;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class ShoppingCartController extends Controller
{
    /**
     * Shopping Cart
     *
     * @var ShoppingCart
     */
    protected $shoppingCart;

    /**
     * Constructor for the ShoppingCartController
     *
     * @param ShoppingCart $shoppingCart
     */
    public function __construct(ShoppingCart $shoppingCart)
    {
        $this->middleware('authNotAdmin');
        $this->middleware('userStatusActive');
        $this->middleware('shoppingCartNotEmpty', [
            'except' => [
                'getShoppingCart',
                'postShoppingCart',
            ]
        ]);

        $this->shoppingCart = $shoppingCart;

        parent::__construct();
    }

    /**
     * Display the shopping cart basket
     *
     * @return \Illuminate\Http\Response
     */
    public function getShoppingCart()
    {
        $shoppingCart = $this->shoppingCart;
        $shoppingCart->retrieveBasket();

        return view('pages.shoppingcart.cart.index', compact('shoppingCart'));
    }

    /**
     * Update the shopping cart basket
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postShoppingCart(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required|exists:products,id',
            'product_quantity' => 'required|integer|between:0,99'
        ]);

        $update = $request->only([
            'product_id',
            'product_quantity'
        ]);

        $shoppingCart = $this->shoppingCart;
        $updateIsSuccessful = $shoppingCart->updateBasket($update);

        if ($updateIsSuccessful) {
            return redirect('/shoppingcart/cart');
        } else {
            return redirect('/shoppingcart/cart')->with('errors', collect(['Product is out of stock']));
        }
    }

    /**
     * Display the page for entering Shipping and Billing Addresses
     *
     * @return \Illuminate\Http\Response
     */
    public function getAddress()
    {
        $shoppingCart = $this->shoppingCart;
        $shoppingCart->retrieveBasket();
        $shoppingCart->getShippingAddress();
        $shoppingCart->getBillingAddress();

        return view('pages.shoppingcart.address.index', compact('shoppingCart'));
    }

    /**
     * Update the Billing and Shipping Addresses
     *
     * @param ShoppingCartUpdateAddressRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAddress(ShoppingCartUpdateAddressRequest $request)
    {
        $shippingAddress = $request->only([
            'shipping_title',
            'shipping_first_name',
            'shipping_last_name',
            'shipping_business_name',
            'shipping_street_address_one',
            'shipping_street_address_two',
            'shipping_state',
            'shipping_country',
            'shipping_postcode',
            'shipping_phone',
            'delivery_instruction'
        ]);

        $billingAddress = $request->only([
            'billing_title',
            'billing_first_name',
            'billing_last_name',
            'billing_business_name',
            'billing_street_address_one',
            'billing_street_address_two',
            'billing_state',
            'billing_country',
            'billing_postcode',
        ]);

        $shoppingCart = $this->shoppingCart;
        $shoppingCart->retrieveBasket();
        $shoppingCart->updateShippingAddress($shippingAddress);
        $shoppingCart->updateBillingAddress($billingAddress);
        $order = $shoppingCart->createOrder();
        session()->put('new_order', $order);

        return redirect('/shoppingcart/summary');
    }

    /**
     * Display the checkout summary page
     *
     * @param BillingInterface $billing
     * @return \Illuminate\Http\Response
     */
    public function getSummary(BillingInterface $billing)
    {
        // Return to previous step if no order is found in session
        if (!session()->has('new_order')) {
            return redirect('/shoppingcart/cart');
        }

        // Retrieve order from session
        $order = session()->get('new_order');

        $clientToken = $billing->getClientToken();
        return view('pages.shoppingcart.summary.index', compact('order', 'clientToken'));
    }

    public function postCommWebDigitalOrder(ShoppingCartDigitalOrderRequest $request, BillingInterface $billing)
    {
        // Retrieve Client IP from request
        $request->setTrustedProxies([Config::get('services.aws.load-balancer')]);
        $client_ip = $request->ip();
        $request['ip'] = $client_ip;
        $request = $request->only([
            'order',
            'ip'
        ]);

        // Disallow order that has been previously processed and has a transaction reference
        if ($billing->orderAlreadyHasMerchTxnRef($request)) {
            // Create a new order from shopping cart to replace the already processed one
            $this->shoppingCart->retrieveBasket();
            $this->shoppingCart->getShippingAddress();
            $this->shoppingCart->getBillingAddress();
            $order = $this->shoppingCart->createOrder();
            session()->put('new_order', $order);
            $request['order'] = $order->id;
        }

        // Create CommWeb billing transaction for the Order
        $billingRequest = $billing->createBillingRequest($request);
        $vpc_url = $billing->generateBillingUrl($billingRequest);
        dd($vpc_url);
        return Response::make('', 200, ['Location' => $vpc_url]);
    }

    public function getCommWebDigitalReceipt(ShoppingCartDigitalReceipt $request, BillingInterface $billing, MedlabMailer $mail)
    {
        // Check the receipt response message and make sure receipt contents match the order information
        $errorMessages = $billing->validateOrderReceipt($request);

        // Save the receipt to the log file
        $this->logCommWebReceipt($request, $errorMessages);

        // Process the order if no errors are found
        if (count($errorMessages) == 0) {
            $order = $billing->processOrder($request);
            $mail->sendOrderReceivedNoticeToAdmin($order);
            $mail->sendOrderReceivedNoticeToClient($order);

            return redirect('/shoppingcart/digitalcheckout')->with('order', $order);
        } else {
            // Mail the error to the admin
            $error = array_merge($errorMessages, $request->all());
            $mail->sendCommWebReceiptErrorToAdmin($error);

            return redirect('/shoppingcart/summary')->with('errors', collect($errorMessages));
        }
    }

    public function getCommWebCheckOut()
    {
        session()->forget('basket');
        session()->forget('new_order');
        $order = Session::get('order');

        return view('pages.shoppingcart.order.index', compact('order'));
    }

    private function logCommWebReceipt($request, $errorMessages)
    {
        $log = new Logger('CommWebReceipt');

        if (count($errorMessages) == 0) {
            $log->pushHandler(new StreamHandler(storage_path("/logs/CommWebReceipt.log")));
        } else {
            $log->pushHandler(new StreamHandler(storage_path("/logs/CommWebReceiptError.log")));
        }

        $messageToLog = array_merge($errorMessages, $request->all());
        $log->addInfo(
            'MerchRef: ' . $request['vpc_MerchTxnRef'] .
            ' TxnCode: ' . $request['vpc_TxnResponseCode'],
            $messageToLog
        );
    }

    /**
     * Process the order and checkout for Braintree billing
     *
     * @param ShoppingCartCheckoutRequest $request
     * @param BillingInterface $billing
     * @param MedlabMailer $mail
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function postCheckout(ShoppingCartCheckoutRequest $request, BillingInterface $billing, MedlabMailer $mail)
    {
        $request->setTrustedProxies([Config::get('services.aws.load-balancer')]);
        $client_ip = $request->ip();

        $request = $request->only([
            'payment_token',
            'payment_type',
            'order'
        ]);

        $request['ip'] = $client_ip;

        $result = $billing->processOrder($request);

        if ($result->success) {
            session()->forget('basket');
            session()->forget('new_order');

            $order = Order::findOrFail($request['order']);
            $mail->sendOrderReceivedNoticeToAdmin($order);
            $mail->sendOrderReceivedNoticeToClient($order);

            return view('pages.shoppingcart.order.index', compact('order'));
        } else {
            $errors = [];

            foreach ($result->errors->deepAll() as $error) {
                $errors[] = $error->message;
            }

            return redirect('/shoppingcart/summary')->with('errors', collect($errors));
        }
    }
}
