<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShoppingCartUpdateRequest;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ShoppingCartController extends Controller
{
    /**
     * Controller constructor - defines the middleware configurations.
     *
     */
    public function __construct()
    {
        $this->middleware('auth', [
            'only' => [
                'getShoppingCart',
                'postShoppingCart'
            ]
        ]);
    }

    public function getShoppingCart(Request $request)
    {
        $products = $this->getBasket($request);
        $subtotal = $this->calcuateSubtotal($products);

        return view('pages.shoppingcart.cart.index', compact('products', 'subtotal'));
    }

    public function postShoppingCart(ShoppingCartUpdateRequest $request)
    {
        $this->updateBasket($request);

        return redirect('/shoppingcart/cart');
    }

    private function getBasket($request) {

        $basket = $request->session()->get('basket', []);
        $products = [];

        if(count($basket)) {

            $products_in_basket = array_keys($basket);
            $products_in_basket = Product::whereIn('idProduct', $products_in_basket)->get();

            // Create Product list
            foreach($products_in_basket as $product) {
                $qty = $basket[$product->idProduct];
                $products[] = ['product' => $product, 'quantity' => $qty];
            }
        }

        return $products;
    }

    private function updateBasket($request) {

        $update = $request->only([
            'product_id',
            'product_quantity'
        ]);

        $basket = $request->session()->get('basket', []);

        if ($update['product_quantity'] == 0) {
            unset($basket[$update['product_id']]);
        }
        else {
            $basket[$update['product_id']] = $update['product_quantity'];
        }

        $request->session()->put('basket', $basket);
    }

    private function calcuateSubtotal($products) {

        $subtotal = 0;

        foreach ($products as $product) {

            if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') ) {
                $subtotal += $product['product']['price_wholesale'] * $product['quantity'];
            }
            else {
                $subtotal += $product['product']['price_retail'] * $product['quantity'];
            }
        }

        return $subtotal;
    }
}
