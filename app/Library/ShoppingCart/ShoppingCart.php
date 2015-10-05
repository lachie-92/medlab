<?php

namespace App\Library\ShoppingCart;

use App\Order;
use App\OrderedProduct;
use App\OrderedProducts_Promotion;
use App\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ShoppingCart {

    public $shippingCost = 11;
    public $tax = 0.1;
    public $basket = [];
    public $subtotal = 0;
    public $GST = 0;
    public $total = 0;
    public $discount = 0;
    public $shippingAddress = [];
    public $billingAddress = [];
    public $paymentOption = [];
    public $errorMessage = '';

    protected $user;

    public function __construct()
    {
        $this->user = Auth::user();

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

                    $userGroup = $this->user->group;

                    if ($userGroup == 'Practitioner') {
                        $price = $product->price_wholesale;
                    }
                    else {
                        $price = $product->price_retail;
                    }

                    $originalPrice = $price;
                    $qty = $shoppingCart[$product->id];
                    $discount_percentage = 0;

                    // Retrieve Promotions on the product
                    $eligiblePromotions = [];
                    foreach ($product->promotions as $promotion) {

                        $eligible =
                            ($promotion->apply_to_group == $userGroup) &
                            ($promotion->isActive) &
                            (Carbon::now()->between($promotion->starting_date, $promotion->end_date));

                        if ($eligible) {

                            $eligiblePromotion = [];
                            $eligiblePromotion['name'] = $promotion->name;
                            $eligiblePromotion['type'] = $promotion->type;
                            $eligiblePromotion['description'] = $promotion->description;
                            $eligiblePromotion['apply_to_group'] = $promotion->apply_to_group;
                            $eligiblePromotion['starting_date'] = $promotion->starting_date;
                            $eligiblePromotion['end_date'] = $promotion->end_date;

                            if ($promotion->type == 'buy_one_get_one_free') {

                                $minimum_qty = $promotion->buy_one_get_one_free->minimum_qty;
                                $bonus_qty = $promotion->buy_one_get_one_free->bonus_qty;
                                $free_qty = floor($qty / $minimum_qty) * $bonus_qty;

                                $eligiblePromotion['free_qty'] = $free_qty;
                                $this->discount +=  $originalPrice * $free_qty;

                            }
                            elseif ($promotion->type == 'price_discount') {

                                $discount_percentage = $discount_percentage + $promotion->price_discount->discount_percentage;
                                $eligiblePromotion['discount_percentage'] = $promotion->price_discount->discount_percentage;
                                $eligiblePromotion['original_price'] = $originalPrice;
                            }

                            $eligiblePromotions[] = $eligiblePromotion;
                        }
                    }

                    $beforeDiscountTotal = $price * $qty;

                    if ($discount_percentage < 100) {

                        $price = round($price * ( (100 - $discount_percentage) / 100 ), 2);
                    }
                    else {
                        $price = 0;
                    }

                    $total = $price * $qty;
                    $discount = $beforeDiscountTotal - $total;
                    $this->subtotal += $total;
                    $this->discount += $discount;

                    $this->basket[] = [
                        'index' => $index++,
                        'product' => $product,
                        'quantity' => $qty,
                        'original_price' => $originalPrice,
                        'price' => $price,
                        'discount_percentage' => $discount_percentage,
                        'discount' => $discount,
                        'total' => number_format($total, 2),
                        'promotions' => $eligiblePromotions,
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

        // formatting
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

    public function getShippingAddress()
    {
        $user = $this->user;
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

    public function getBillingAddress()
    {
        $user = $this->user;
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

    // This should be create order
    public function updatePaymentOption($request)
    {
        $update = $request->only([
            'payment_option',
        ]);

        $paymentOption = [];

        $paymentOption['type'] = $update['payment_option'];

        $this->paymentOption = collect($paymentOption);
        $request->session()->put('paymentOption', $paymentOption);

        // need to redesign to retrieve the credit token for this part
        // and create an entry in the order table with the order detail
        // also the token and order detail must validate each other
    }

    public function createOrder($request)
    {
        $update = $request->only([
            'payment_option',
            'token'
        ]);

        $order = new Order();

        $order->user_id = $this->user->id;
        $order->payment_type = $update['payment_option'];
        $order->order_status = 'new_order';
        $order->subtotal = $this->subtotal;
        $order->GST = $this->GST;
        $order->shipping_cost = $this->shippingCost;
        $order->discount = $this->discount;
        $order->grand_total = $this->total;

        $this->getShippingAddress();
        $order->shipping_address_title = $this->shippingAddress['title'];
        $order->shipping_address_first_name = $this->shippingAddress['first_name'];
        $order->shipping_address_last_name = $this->shippingAddress['last_name'];
        $order->shipping_address_street = $this->shippingAddress['street'];
        $order->shipping_address_suburb = $this->shippingAddress['suburb'];
        $order->shipping_address_city = $this->shippingAddress['city'];
        $order->shipping_address_postcode = $this->shippingAddress['postcode'];
        $order->shipping_address_state = $this->shippingAddress['state'];
        $order->shipping_address_country = $this->shippingAddress['country'];
        $order->shipping_address_phone = $this->shippingAddress['phone'];

        $this->getBillingAddress();
        $order->billing_address_title = $this->billingAddress['title'];
        $order->billing_address_first_name = $this->billingAddress['first_name'];
        $order->billing_address_last_name = $this->billingAddress['last_name'];
        $order->billing_address_street = $this->billingAddress['street'];
        $order->billing_address_suburb = $this->billingAddress['suburb'];
        $order->billing_address_city = $this->billingAddress['city'];
        $order->billing_address_postcode = $this->billingAddress['postcode'];
        $order->billing_address_state = $this->billingAddress['state'];
        $order->billing_address_country = $this->billingAddress['country'];

        $order->save();

        foreach ($this->basket as $item) {

            $orderedProduct = new OrderedProduct();

            $orderedProduct->order_id = $order->id;

            $orderedProduct->product_name = $item['product']->product_name_index;
            $orderedProduct->line_price = $item['original_price'];
            $orderedProduct->line_quantity = $item['quantity'];
            $orderedProduct->discount_percentage = $item['discount_percentage'];
            $orderedProduct->discounted_price = $item['price'];
            $orderedProduct->line_total = $item['total'];

            $orderedProduct->save();

            foreach ($item['promotions'] as $promotion) {

                $orderedProductPromotion = new OrderedProducts_Promotion();

                $orderedProductPromotion->orderedProduct_id = $orderedProduct->id;

                $orderedProductPromotion->promotion_name = $promotion['name'];
                $orderedProductPromotion->type = $promotion['type'];
                $orderedProductPromotion->promotion_description = $promotion['description'];
                $orderedProductPromotion->promotion_apply_to_group = $promotion['apply_to_group'];
                $orderedProductPromotion->promotion_starting_date = $promotion['starting_date'];
                $orderedProductPromotion->promotion_end_date = $promotion['end_date'];

                $orderedProductPromotion->save();

                if ($orderedProductPromotion->type == 'buy_one_get_one_free') {

                    if ($promotion['free_qty'] > 0) {

                        $buy_one_get_one_free_Product = new OrderedProduct();

                        $buy_one_get_one_free_Product->order_id = $order->id;

                        $buy_one_get_one_free_Product->product_name = 'FREE - ' . $item['product']->product_name_index;
                        $buy_one_get_one_free_Product->line_price = $item['original_price'];
                        $buy_one_get_one_free_Product->line_quantity = $promotion['free_qty'];
                        $buy_one_get_one_free_Product->discount_percentage = 100;
                        $buy_one_get_one_free_Product->discounted_price = 0;
                        $buy_one_get_one_free_Product->line_total = 0;

                        $buy_one_get_one_free_Product->save();

                        $buy_one_get_one_free_Promotion = new OrderedProducts_Promotion();

                        $buy_one_get_one_free_Promotion->orderedProduct_id = $buy_one_get_one_free_Product->id;

                        $buy_one_get_one_free_Promotion->promotion_name = $promotion['name'];
                        $buy_one_get_one_free_Promotion->promotion_description = $promotion['description'];
                        $buy_one_get_one_free_Promotion->promotion_apply_to_group = $promotion['apply_to_group'];
                        $buy_one_get_one_free_Promotion->promotion_starting_date = $promotion['starting_date'];
                        $buy_one_get_one_free_Promotion->promotion_end_date = $promotion['end_date'];

                        $buy_one_get_one_free_Promotion->save();
                    }
                }
            }
        }

        return $order;
    }

    public function getSummary()
    {
        $this->getPaymentOption();
        $this->getShippingAddress();
        $this->getBillingAddress();

        // need to redesign so we read from the order table entry instead of session
    }

    public function checkout($request, $user)
    {
        // need to redesign so we execute checkout from the entry inside order table
        // need to write a crontab so abandoned orders are deleted from database after an hour
        // need to setup middle ware so only the owner of the order can checkout his order
        // and ensure the order that has been checked out cannot be checkout again

        $orderInfo = $request->only('order_number', 'token');
        $paymentToken = $orderInfo['token'];

        $message = $this->validatePaymentToken($paymentToken);

        if ($message == 'success') {

            $this->getSummary();
            return true;
        }
        else {

            $this->errorMessage = $message;
            return false;
        }
    }

    private function validatePaymentToken($paymentToken)
    {
        return 'success';
    }
}