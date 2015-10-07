<?php

namespace App\Library\ShoppingCart;

use App\Library\Repositories\ShoppingCartRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ShoppingCart {

    public $shippingCost;
    public $tax;
    public $basket;
    public $subtotal;
    public $GST;
    public $total;
    public $discount;
    public $shippingAddress;
    public $billingAddress;
    public $errorMessage;

    protected $user;
    protected $userHasLogin;
    protected $repository;

    public function __construct(ShoppingCartRepositoryInterface $repository)
    {
        $this->shippingCost = 11;
        $this->tax = 0.1;

        $this->subtotal = 0;
        $this->GST = 0;
        $this->total = 0;
        $this->discount = 0;
        $this->basket = session()->get('basket', []);
        $this->shippingAddress = session()->get('shippingAddress', []);
        $this->billingAddress = session()->get('billingAddress', []);
        $this->errorMessage = '';

        $this->user = $this->userHasLogin = Auth::user();
        $this->repository = $repository;

        if ($this->userHasLogin) {
            $this->createBasket();
        }
    }

    private function createBasket()
    {
        if(!empty($this->basket)) {

            $products = $this->repository->getProductListInBasket($this->basket);
            $basket = [];

            $index = 0;
            foreach($products as $product) {

                $originalPrice = $this->getProductPriceBaseOnUserGroup($product);
                $qty = $this->basket[$product->id];
                $discount_percentage = 0;
                $eligiblePromotions = [];

                foreach ($product->promotions as $promotion) {

                    if ($this->isEligibleForPromotion($promotion)) {

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

                            $promotion_discount = $promotion->price_discount->discount_percentage;
                            $discount_percentage = $discount_percentage + $promotion_discount;

                            $eligiblePromotion['discount_percentage'] = $promotion_discount;
                            $eligiblePromotion['original_price'] = $originalPrice;
                        }

                        $eligiblePromotions[] = $eligiblePromotion;
                    }
                }

                $price = $this->applyDiscount($originalPrice, $discount_percentage);
                $total = $price * $qty;
                $beforeDiscountTotal = $originalPrice * $qty;
                $discount = $beforeDiscountTotal - $total;
                $this->subtotal += $total;
                $this->discount += $discount;

                $basket[] = [
                    'index' => $index++,
                    'product' => $product,
                    'quantity' => $qty,
                    'original_price' => $originalPrice,
                    'price' => $price,
                    'discount_percentage' => $discount_percentage,
                    'discount' => $discount,
                    'total' => $total,
                    'promotions' => $eligiblePromotions,
                ];
            }

            $this->basket = $basket;
        }

        $this->GST = round($this->subtotal * $this->tax, 2);
        $this->total = round($this->subtotal * ($this->tax + 1), 2) + $this->shippingCost;
    }

    private function getProductPriceBaseOnUserGroup($product)
    {
        $userGroup = $this->user->group;

        if ($userGroup == 'Practitioner') {
            $price = $product->price_wholesale;
        }
        else {
            $price = $product->price_retail;
        }

        return $price;
    }

    private function isEligibleForPromotion($promotion)
    {
        $userGroup = $this->user->group;

        $eligible =
            ($promotion->apply_to_group == $userGroup) &
            ($promotion->isActive) &
            (Carbon::now()->between($promotion->starting_date, $promotion->end_date));

        return $eligible;
    }

    private function applyDiscount($originalPrice, $discount_percentage)
    {
        if ($discount_percentage < 100) {
            $price = round($originalPrice * ( (100 - $discount_percentage) / 100 ), 2);
        }
        else {
            $price = 0;
        }

        return $price;
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

        session()->put('basket', $basket);
    }

    public function getShippingAddress()
    {
        if (empty($this->shippingAddress)) {
            $this->shippingAddress = $this->repository->createUserShippingAddress($this->user);
        }
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

        $shippingAddress = $update;
        $shippingAddress['street'] = $update['street_address_one'];
        $shippingAddress['suburb'] = $update['street_address_two'];

        $this->shippingAddress = $shippingAddress;
        session()->put('shippingAddress', $this->shippingAddress);
    }

    public function getBillingAddress()
    {
        if (empty($this->billingAddress)) {
            $this->billingAddress = $this->repository->createUserBillingAddress($this->user);
        }
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

        $billingAddress = $update;
        $billingAddress['street'] = $update['street_address_one'];
        $billingAddress['suburb'] = $update['street_address_two'];

        $this->billingAddress = $billingAddress;
        session()->put('billingAddress', $this->billingAddress);
    }

    public function createOrder($request)
    {
        $update = $request->only([
            'payment_option',
            'token'
        ]);

        $shoppingCart = $this;

        $order = $this->repository->createOrder(
            $this->user,
            $shoppingCart,
            $update['payment_option'],
            $update['token']
        );

        foreach ($this->basket as $product) {

            $orderedProduct = $this->repository->createOrderedProduct($order, $product);

            foreach ($product['promotions'] as $promotion) {

                $this->repository->createOrderedProductPromotion(
                    $order,
                    $orderedProduct,
                    $promotion
                );
            }
        }

        return $order;
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