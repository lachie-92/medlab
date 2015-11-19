<?php
namespace App\Medlab\Repositories;


use App\Order;
use App\OrderedProduct;
use App\OrderedProducts_Promotion;
use App\Product;

class ShoppingCartRepository implements ShoppingCartRepositoryInterface
{
    //
    // Shopping Cart
    //
    /**
     * Create a list of product using the basket array stored in session
     *
     * @param $basketArrayInSession
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getProductListInBasket($basketArrayInSession)
    {
        $products = array_keys($basketArrayInSession);
        $products = Product::whereIn('id', $products)->get();

        return $products;
    }

    /**
     * Create a Shipping Address array using the User Account Address
     *
     * @param $user
     * @return array
     */
    public function createUserShippingAddress($user)
    {
        $accountAddress = $user->customer->customer_addresses->where('type', 'Account')->first();
        $accountMobile = $user->customer->customer_numbers->where('type', 'Account Mobile')->first();

        $shippingAddress['title'] = $user->customer->title;
        $shippingAddress['first_name'] = $user->customer->first_name;
        $shippingAddress['last_name'] = $user->customer->last_name;
        $shippingAddress['street'] = $accountAddress->street;
        $shippingAddress['suburb'] = $accountAddress->suburb;
        $shippingAddress['city'] = $accountAddress->city;
        $shippingAddress['postcode'] = $accountAddress->postcode;
        $shippingAddress['state'] = $accountAddress->state;
        $shippingAddress['country'] = $accountAddress->country;
        $shippingAddress['phone'] = $accountMobile->number;

        return $shippingAddress;
    }

    /**
     * Create a Billing Address array using the User Account Address
     *
     * @param $user
     * @return array
     */
    public function createUserBillingAddress($user)
    {
        $accountAddress = $user->customer->customer_addresses->where('type', 'Account')->first();

        $billingAddress['title'] = $user->customer->title;
        $billingAddress['first_name'] = $user->customer->first_name;
        $billingAddress['last_name'] = $user->customer->last_name;
        $billingAddress['street'] = $accountAddress->street;
        $billingAddress['suburb'] = $accountAddress->suburb;
        $billingAddress['city'] = $accountAddress->city;
        $billingAddress['postcode'] = $accountAddress->postcode;
        $billingAddress['state'] = $accountAddress->state;
        $billingAddress['country'] = $accountAddress->country;

        return $billingAddress;
    }

    /**
     * Create a new Order using the shopping cart and user
     *
     * @param $user
     * @param $subtotal
     * @param $GST
     * @param $shippingCost
     * @param $discount
     * @param $total
     * @param $shippingAddress
     * @param $billingAddress
     * @return Order
     */
    public function createOrder($user, $subtotal, $GST, $shippingCost, $discount, $total, $shippingAddress, $billingAddress)
    {
        $order = new Order();

        $order->user_id = $user->id;
        $order->order_status = 'New Order';
        $order->subtotal = $subtotal;
        $order->GST = $GST;
        $order->shipping_cost = $shippingCost;
        $order->discount = $discount;
        $order->grand_total = $total;

        $order->shipping_address_title = $shippingAddress['title'];
        $order->shipping_address_first_name = $shippingAddress['first_name'];
        $order->shipping_address_last_name = $shippingAddress['last_name'];
        $order->shipping_address_street = $shippingAddress['street'];
        $order->shipping_address_suburb = $shippingAddress['suburb'];
        $order->shipping_address_city = $shippingAddress['city'];
        $order->shipping_address_postcode = $shippingAddress['postcode'];
        $order->shipping_address_state = $shippingAddress['state'];
        $order->shipping_address_country = $shippingAddress['country'];
        $order->shipping_address_phone = $shippingAddress['phone'];

        $order->billing_address_title = $billingAddress['title'];
        $order->billing_address_first_name = $billingAddress['first_name'];
        $order->billing_address_last_name = $billingAddress['last_name'];
        $order->billing_address_street = $billingAddress['street'];
        $order->billing_address_suburb = $billingAddress['suburb'];
        $order->billing_address_city = $billingAddress['city'];
        $order->billing_address_postcode = $billingAddress['postcode'];
        $order->billing_address_state = $billingAddress['state'];
        $order->billing_address_country = $billingAddress['country'];

        $order->save();

        return $order;
    }

    /**
     * Create an Ordered Product belong to the given order
     *
     * @param $order
     * @param $product
     * @return \App\OrderedProduct
     */
    public function createOrderedProduct($order, $product)
    {
        $orderedProduct = new OrderedProduct();

        $orderedProduct->order_id = $order->id;
        $orderedProduct->product_name = $product['product']->product_name_index;
        $orderedProduct->line_price = $product['original_price'];
        $orderedProduct->line_quantity = $product['quantity'];
        $orderedProduct->discount_percentage = $product['discount_percentage'];
        $orderedProduct->discounted_price = $product['price'];
        $orderedProduct->line_total = $product['total'];

        $orderedProduct->save();

        return $orderedProduct;
    }

    /**
     * Create a Promotion associated to the Ordered Product
     *
     * @param $order
     * @param $orderedProduct
     * @param $promotion
     * @return \App\OrderedProducts_Promotion
     */
    public function createOrderedProductPromotion($order, $orderedProduct, $promotion)
    {
        $orderedProductPromotion = new OrderedProducts_Promotion();

        $orderedProductPromotion->orderedProduct_id = $orderedProduct->id;
        $orderedProductPromotion->promotion_name = $promotion['name'];
        $orderedProductPromotion->type = $promotion['type'];
        $orderedProductPromotion->promotion_description = $promotion['description'];
        $orderedProductPromotion->promotion_apply_to_group = $promotion['apply_to_group'];
        $orderedProductPromotion->promotion_starting_date = $promotion['starting_date'];
        $orderedProductPromotion->promotion_end_date = $promotion['end_date'];

        $orderedProductPromotion->save();

        if ($promotion['type'] == 'buy_one_get_one_free' && $promotion['free_qty'] > 0) {
            $this->addFreeQtyToOrderedProduct($order, $orderedProduct, $promotion);
        }

        return $orderedProductPromotion;
    }

    /**
     * Add Free quantity for buy one get one free promotion
     *
     * @param $order
     * @param $orderedProduct
     * @param $promotion
     */
    public function addFreeQtyToOrderedProduct($order, $orderedProduct, $promotion)
    {
        $buy_one_get_one_free_Product = new OrderedProduct();

        $buy_one_get_one_free_Product->order_id = $order->id;
        $buy_one_get_one_free_Product->product_name = 'FREE - ' . $orderedProduct->product_name;
        $buy_one_get_one_free_Product->line_price = $orderedProduct->line_price;
        $buy_one_get_one_free_Product->line_quantity = $promotion['free_qty'];
        $buy_one_get_one_free_Product->discount_percentage = 100;
        $buy_one_get_one_free_Product->discounted_price = 0;
        $buy_one_get_one_free_Product->line_total = 0;

        $buy_one_get_one_free_Product->save();

        $buy_one_get_one_free_Promotion = new OrderedProducts_Promotion();

        $buy_one_get_one_free_Promotion->orderedProduct_id = $buy_one_get_one_free_Product->id;
        $buy_one_get_one_free_Promotion->promotion_name = $promotion['name'];
        $buy_one_get_one_free_Promotion->type = $promotion['type'];
        $buy_one_get_one_free_Promotion->promotion_description = $promotion['description'];
        $buy_one_get_one_free_Promotion->promotion_apply_to_group = $promotion['apply_to_group'];
        $buy_one_get_one_free_Promotion->promotion_starting_date = $promotion['starting_date'];
        $buy_one_get_one_free_Promotion->promotion_end_date = $promotion['end_date'];

        $buy_one_get_one_free_Promotion->save();
    }
}