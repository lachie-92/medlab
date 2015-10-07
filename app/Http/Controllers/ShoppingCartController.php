<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShoppingCartPaymentOptionRequest;
use App\Http\Requests\ShoppingCartShippingAddressRequest;
use App\Library\ShoppingCart\ShoppingCart;
use App\Order;
use Carbon\Carbon;
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

        return view('pages.shoppingcart.cart.index', compact('shoppingCart'));
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

    public function getShippingAddress()
    {
        $shoppingCart = $this->shoppingCart;
        $shoppingCart->getShippingAddress();

        return view('pages.shoppingcart.address.index', compact('shoppingCart'));
    }

    public function postShippingAddress(ShoppingCartShippingAddressRequest $request)
    {
        $shoppingCart = $this->shoppingCart;
        $shoppingCart->updateShippingAddress($request);

        return redirect('/shoppingcart/payment');
    }

    public function getPayment()
    {
        $shoppingCart = $this->shoppingCart;
        $shoppingCart->getBillingAddress();

        return view('pages.shoppingcart.payment.index', compact('shoppingCart'));
    }

    public function postPayment(ShoppingCartPaymentOptionRequest $request)
    {
        $shoppingCart = $this->shoppingCart;
        $order = $shoppingCart->createOrder($request);

        return view('pages.shoppingcart.summary.index', compact('order'));
    }

    public function postCheckout(Request $request)
    {
        $this->validate($request, [
            'payment_token' => 'required|exists:orders,id',
        ]);

        $order = Order::findOrFail($request->payment_token);
        $order->order_status = 'Order received';
        $order->purchase_date = Carbon::now();
        $order->save();
        session()->forget('basket');

        return redirect('/account/orders')->with('message', 'Your order has been received');
    }
}
