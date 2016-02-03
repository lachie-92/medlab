<?php
namespace App\Http\Controllers;

use App\Http\Requests\ShoppingCartCheckoutRequest;
use App\Http\Requests\ShoppingCartDigitalOrderRequest;
use App\Http\Requests\ShoppingCartUpdateAddressRequest;
use App\Medlab\Billing\BillingInterface;
use App\Medlab\Mailer\MedlabMailer;
use App\Medlab\ShoppingCart\ShoppingCart;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;

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
        }
        else {
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
            'shipping_street_address_one',
            'shipping_street_address_two',
            'shipping_state',
            'shipping_country',
            'shipping_postcode',
            'shipping_phone'
        ]);

        $billingAddress = $request->only([
            'billing_title',
            'billing_first_name',
            'billing_last_name',
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
        if (!session()->has('new_order')) {

            return redirect('/shoppingcart/cart');
        }

        $order = session()->get('new_order');

        //if (is_a($billing, 'CommWebBilling')) {
            return view('pages.shoppingcart.commweb.index', compact('order'));
        //}
        //else {
        //    $clientToken = $billing->getClientToken();
        //    return view('pages.shoppingcart.summary.index', compact('order', 'clientToken'));
        //}
    }

    /**
     * Process the order and checkout
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
            $mail->sendOrderRecievedNoticeToClient($order);

            return view('pages.shoppingcart.order.index', compact('order'));
        }
        else {

            $errors = [];

            foreach ($result->errors->deepAll() as $error) {
                $errors[] = $error->message;
            }

            return redirect('/shoppingcart/summary')->with('errors', collect($errors));
        }
    }

    public function postCommWebDigitalOrder(ShoppingCartDigitalOrderRequest $request, BillingInterface $billing)
    {
        $vpc_url = $billing->processOrder($request);

        return Redirect::to($vpc_url);
    }

    public function getCommWebDigitalReceipt(Request $request)
    {
        var_dump($request->all());
    }
}
