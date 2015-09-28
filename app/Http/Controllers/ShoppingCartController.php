<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShoppingCartPaymentOptionRequest;
use App\Http\Requests\ShoppingCartShippingAddressUpdateRequest;
use App\Http\Requests\ShoppingCartUpdateRequest;
use App\Library\Repositories\ShoppingCartRepositoryInterface;
use App\Library\ShoppingCart\ShoppingCart;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ShoppingCartController extends Controller
{
    protected $repository;

    public function __construct(ShoppingCartRepositoryInterface $repository)
    {
        $this->middleware('auth');
        $this->middleware('shoppingCartNotEmpty', [
            'except' => [
                'getShoppingCart',
                'postShoppingCart',
            ]
        ]);

        $this->repository = $repository;

        parent::__construct();
    }

    public function getShoppingCart(ShoppingCart $shoppingCart)
    {
        return view('pages.shoppingcart.cart.index', compact('shoppingCart'));
    }

    public function postShoppingCart(ShoppingCartUpdateRequest $request, ShoppingCart $shoppingCart)
    {
        $shoppingCart->updateBasket($request);

        return redirect('/shoppingcart/cart');
    }

    public function getShippingAddress(ShoppingCart $shoppingCart)
    {
        $shoppingCart->getShippingAddress($this->user);

        return view('pages.shoppingcart.address.index', compact('shoppingCart'));
    }

    public function postShippingAddress(ShoppingCartShippingAddressUpdateRequest $request, ShoppingCart $shoppingCart)
    {
        $shoppingCart->updateShippingAddress($request);

        return redirect('/shoppingcart/payment');
    }

    public function getPayment(ShoppingCart $shoppingCart)
    {
        $shoppingCart->getBillingAddress($this->user);

        return view('pages.shoppingcart.payment.index', compact('shoppingCart'));
    }

    public function postPayment(ShoppingCartPaymentOptionRequest $request, ShoppingCart $shoppingCart)
    {

        $shoppingCart->updatePaymentOption($request);

        if($request['payment_option'] == 'visa') {
            $shoppingCart->updateBillingAddress($request);
        }

        return redirect('/shoppingcart/summary');
    }

    public function getSummary(ShoppingCart $shoppingCart)
    {
        $shoppingCart->getSummary($this->user);

        return view('pages.shoppingcart.summary.index', compact('shoppingCart'));
    }

    public function postSummary(Request $request, ShoppingCart $shoppingCart)
    {


        return redirect('/shoppingcart/summary');
    }
}
