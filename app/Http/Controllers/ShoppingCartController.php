<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShoppingCartPaymentOptionRequest;
use App\Http\Requests\ShoppingCartShippingAddressUpdateRequest;
use App\Http\Requests\ShoppingCartUpdateRequest;
use App\Library\ShoppingCart\ShoppingCart;
use App\Order;
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

    public function postShoppingCart(ShoppingCartUpdateRequest $request)
    {
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

    public function postShippingAddress(ShoppingCartShippingAddressUpdateRequest $request)
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
/*
        $shoppingCart->updatePaymentOption($request);

        if($request['payment_option'] == 'visa') {
            $shoppingCart->updateBillingAddress($request);
        }

        return redirect('/shoppingcart/summary');
*/
        return view('pages.shoppingcart.summary.index', compact('order'));
    }

    public function getSummary(Request $request)
    {

        $shoppingCart = $this->shoppingCart;
        $shoppingCart->getSummary();

        //should read from the order table instead

        return view('pages.shoppingcart.summary.index', compact('shoppingCart'));


        Order::findOrFail($request->order);
    }

    public function postSummary(Request $request)
    {
        $user = $this->user;
        $shoppingCart = $this->shoppingCart;

        $isSuccessful = $shoppingCart->checkout($request, $user);

        if ($isSuccessful) {

            $order = $shoppingCart->order;

            redirect('/shoppingcart/order', compact('order'));
        }
        else {

            $errorMessage = $shoppingCart->errorMessage;

            return redirect('/shoppingcart/summary')->with('errors', $errorMessage);
        }
    }

    public function getOrder()
    {
        $user = $this->user;

        return view('pages.shoppingcart.order.index', compact('user'));
    }
}
