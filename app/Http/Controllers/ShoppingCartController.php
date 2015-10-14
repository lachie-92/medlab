<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShoppingCartAddressRequest;
use App\Http\Requests\ShoppingCartCheckoutRequest;
use App\Library\Billing\BillingInterface;
use App\Library\ShoppingCart\ShoppingCart;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ShoppingCartController extends Controller
{
    protected $shoppingCart;

    public function __construct(ShoppingCart $shoppingCart)
    {
        $this->middleware('auth');
        $this->middleware('shoppingCartNotEmpty', [
            'except' => [
                'getShoppingCart',
                'postShoppingCart',
            ]
        ]);

        $this->shoppingCart = $shoppingCart;

        parent::__construct();
    }

    public function getShoppingCart()
    {
        $shoppingCart = $this->shoppingCart;

        return view('pages.shoppingcart.cart.index', compact('shoppingCart', 'clientToken'));
    }

    public function postShoppingCart(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required|exists:products,id',
            'product_quantity' => 'required|digits_between:0,99|'
        ]);

        $shoppingCart = $this->shoppingCart;
        $shoppingCart->updateBasket($request);

        return redirect('/shoppingcart/cart');
    }

    public function getAddress()
    {
        $shoppingCart = $this->shoppingCart;
        $shoppingCart->getShippingAddress();
        $shoppingCart->getBillingAddress();

        return view('pages.shoppingcart.address.index', compact('shoppingCart'));
    }

    public function postAddress(ShoppingCartAddressRequest $request)
    {
        $shoppingCart = $this->shoppingCart;
        $shoppingCart->updateShippingAddress($request);
        $shoppingCart->updateBillingAddress($request);
        $order = $shoppingCart->createOrder();
        session()->put('new_order', $order);

        return redirect('/shoppingcart/summary');
    }

    public function getSummary(BillingInterface $billing)
    {
        if (!session()->has('new_order')) {

            return redirect('/shoppingcart/cart');
        }

        $order = session()->get('new_order');
        $clientToken = $billing->getClientToken();

        return view('pages.shoppingcart.summary.index', compact('order', 'clientToken'));
    }

    public function postCheckout(ShoppingCartCheckoutRequest $request, BillingInterface $billing)
    {
        $result = $billing->processOrder($request);

        if ($result->success) {

            session()->forget('basket');
            session()->forget('new_order');
            return redirect('/account/orders')->with('message',
                'Thank You. Your order is currently being processed and you should receive a confirmation soon.'
            );
        }
        else {

            $errors = [];

            foreach ($result->errors->deepAll() as $error) {
                $errors[] = $error->message;
            }

            return redirect('/shoppingcart/summary')->with('errors', collect($errors));
        }
    }
}
