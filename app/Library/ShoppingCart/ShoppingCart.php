<?php

namespace App\Library\ShoppingCart;

use App\Product;
use Illuminate\Support\Facades\Auth;

class ShoppingCart {

    public $shippingCost = 11;
    public $tax = 0.1;
    public $basket = [];
    public $subtotal = 0;
    public $GST = 0;
    public $total = 0;
    public $shippingAddress = [];
    public $billingAddress = [];
    public $paymentOption = [];

    public function __construct()
    {
        $this->createBasket();
        $this->calculateAndFormatPrice();
    }

    private function createBasket()
    {
        if (Auth::check()) {

            $shoppingCart = session()->get('basket', []);

            if(count($shoppingCart)) {

                $products = array_keys($shoppingCart);
                $products = Product::whereIn('id', $products)->get();

                // Add Products to basket
                $index = 0;
                foreach($products as $product) {

                    $qty = $shoppingCart[$product->id];

                    if (Auth::user()->group == 'Practitioner') {
                        $price = $product->price_wholesale;
                    }
                    else {
                        $price = $product->price_retail;
                    }

                    $total = $price * $qty;
                    $this->subtotal += $total;

                    $this->basket[] = [
                        'index' => $index++,
                        'product' => $product,
                        'quantity' => $qty,
                        'price' => $price,
                        'total' => number_format($total, 2)
                    ];
                }
            }
        }

        $this->basket = collect($this->basket);
    }

    private function calculateAndFormatPrice()
    {
        $this->GST = number_format(round($this->subtotal * $this->tax, 2), 2);
        $this->total = number_format(round($this->subtotal * ($this->tax + 1), 2) + $this->shippingCost, 2);
        $this->subtotal = number_format($this->subtotal, 2);
        $this->shippingCost = number_format($this->shippingCost, 2);
    }

    public function updateBasket($request) {

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

    public function getShippingAddress($user)
    {
        $shippingAddress = session()->get('shippingAddress', []);

        if (count($shippingAddress) == 0) {

            $shippingAddress['title'] = $user->customer->title;
            $shippingAddress['first_name'] = $user->customer->first_name;
            $shippingAddress['last_name'] = $user->customer->last_name;
            $shippingAddress['street'] = $user->customer->customer_addresses->where('type', 'Main Address')->first()->street;
            $shippingAddress['suburb'] = $user->customer->customer_addresses->where('type', 'Main Address')->first()->suburb;
            $shippingAddress['city'] = $user->customer->customer_addresses->where('type', 'Main Address')->first()->city;
            $shippingAddress['postcode'] = $user->customer->customer_addresses->where('type', 'Main Address')->first()->postcode;
            $shippingAddress['state'] = $user->customer->customer_addresses->where('type', 'Main Address')->first()->state;
            $shippingAddress['country'] = $user->customer->customer_addresses->where('type', 'Main Address')->first()->country;
            $shippingAddress['phone'] = $user->customer->customer_numbers->where('type', 'Main Mobile Number')->first()->number;
        }

        $this->shippingAddress = collect($shippingAddress);
    }

    public function updateShippingAddress($request)
    {
        $update = $request->only([
            'title',
            'first_name',
            'last_name',
            'street_address_one',
            'street_address_two',
            'city',
            'state',
            'country',
            'postcode',
            'phone'
        ]);

        $shippingAddress = [];

        $shippingAddress['title'] = $update['title'];
        $shippingAddress['first_name'] = $update['first_name'];
        $shippingAddress['last_name'] = $update['last_name'];
        $shippingAddress['street'] = $update['street_address_one'];
        $shippingAddress['suburb'] = $update['street_address_two'];
        $shippingAddress['city'] = $update['city'];
        $shippingAddress['postcode'] = $update['postcode'];
        $shippingAddress['state'] = $update['state'];
        $shippingAddress['country'] = $update['country'];
        $shippingAddress['phone'] = $update['phone'];

        $this->shippingAddress = collect($shippingAddress);
        $request->session()->put('shippingAddress', $shippingAddress);
    }

    public function getBillingAddress($user)
    {
        $billingAddress = session()->get('billingAddress', []);

        if (count($billingAddress) == 0) {

            $billingAddress['title'] = $user->customer->title;
            $billingAddress['first_name'] = $user->customer->first_name;
            $billingAddress['last_name'] = $user->customer->last_name;
            $billingAddress['street'] = $user->customer->customer_addresses->where('type', 'Main Address')->first()->street;
            $billingAddress['suburb'] = $user->customer->customer_addresses->where('type', 'Main Address')->first()->suburb;
            $billingAddress['city'] = $user->customer->customer_addresses->where('type', 'Main Address')->first()->city;
            $billingAddress['postcode'] = $user->customer->customer_addresses->where('type', 'Main Address')->first()->postcode;
            $billingAddress['state'] = $user->customer->customer_addresses->where('type', 'Main Address')->first()->state;
            $billingAddress['country'] = $user->customer->customer_addresses->where('type', 'Main Address')->first()->country;
        }

        $this->billingAddress = collect($billingAddress);
    }

    public function updateBillingAddress($request)
    {
        $update = $request->only([
            'title',
            'first_name',
            'last_name',
            'street_address_one',
            'street_address_two',
            'city',
            'state',
            'country',
            'postcode',
        ]);

        $billingAddress = [];

        $billingAddress['title'] = $update['title'];
        $billingAddress['first_name'] = $update['first_name'];
        $billingAddress['last_name'] = $update['last_name'];
        $billingAddress['street'] = $update['street_address_one'];
        $billingAddress['suburb'] = $update['street_address_two'];
        $billingAddress['city'] = $update['city'];
        $billingAddress['postcode'] = $update['postcode'];
        $billingAddress['state'] = $update['state'];
        $billingAddress['country'] = $update['country'];

        $this->billingAddress = collect($billingAddress);
        $request->session()->put('billingAddress', $billingAddress);
    }

    public function getPaymentOption()
    {
        $paymentOption = session()->get('paymentOption', []);

        if (count($paymentOption) == 0) {

            $paymentOption['type'] = 'No payment option selected';
        }

        $this->paymentOption = collect($paymentOption);
    }

    public function updatePaymentOption($request)
    {
        $update = $request->only([
            'payment_option',
        ]);

        $paymentOption = [];

        $paymentOption['type'] = $update['payment_option'];

        $this->paymentOption = collect($paymentOption);
        $request->session()->put('paymentOption', $paymentOption);
    }

    public function getSummary($user)
    {
        $this->getPaymentOption();
        $this->getShippingAddress($user);
        $this->getBillingAddress($user);
    }
}