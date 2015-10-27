<?php

namespace App\Medlab\ShoppingCart;

use App\Medlab\Repositories\ShoppingCartRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ShoppingCart {

    /**
     * Shipping Cost
     *
     * @var double
     */
    public $shippingCost;

    /**
     * Tax rate
     *
     * @var double
     */
    public $tax;

    /**
     * The basket array for the shopping cart
     *
     * @var array
     */
    public $basket;

    /**
     * The subtotal for the shopping cart
     *
     * @var double
     */
    public $subtotal;

    /**
     * The GST for the shopping cart
     *
     * @var double
     */
    public $GST;

    /**
     * The Grand total for the shopping cart
     *
     * @var double
     */
    public $total;

    /**
     * The discount amount for the shopping cart
     *
     * @var double
     */
    public $discount;

    /**
     * The shipping Address for the shopping cart
     *
     * @var array
     */
    public $shippingAddress;

    /**
     * The billing address for the shopping cart
     *
     * @var array
     */
    public $billingAddress;

    /**
     * The current user
     *
     * @var \App\User
     */
    protected $user;

    /**
     * Check for User login
     *
     * @var boolean
     */
    protected $userHasLogin;

    /**
     * The Repository for the shopping cart
     *
     * @var ShoppingCartRepositoryInterface
     */
    protected $repository;

    /**
     * Constructor for the Shopping Cart
     *
     * @param ShoppingCartRepositoryInterface $repository
     */
    public function __construct(ShoppingCartRepositoryInterface $repository)
    {
        // Set the Shipping cost and tax rate
        $this->shippingCost = 11;
        $this->tax = 0.1;

        // Initialise variables
        $this->user = $this->userHasLogin = Auth::user();
        $this->repository = $repository;
        $this->subtotal = 0;
        $this->GST = 0;
        $this->total = 0;
        $this->discount = 0;

        // Get basket from session
        $this->basket = session()->get('basket', []);

        // Get Billing and Shipping Address from session
        $this->shippingAddress = session()->get('shippingAddress', []);
        $this->billingAddress = session()->get('billingAddress', []);

        // Only process the Shopping cart when user is login
        if ($this->userHasLogin) {
            $this->createBasket();
        }
    }

    /**
     * Process the items in the shopping cart basket to generate:
     *  - Basket (Product List)
     *      - Product info
     *      - Original price
     *      - Discounted Price
     *      - Quantity
     *      - Promotion
     *      - Discount saved
     *  - Subtotal
     *  - GST
     *  - Grand total
     *  - Discount
     */
    private function createBasket()
    {
        // Skip if the basket is empty
        if(!empty($this->basket)) {

            // Retrieve the product list from the database
            $products = $this->repository->getProductListInBasket($this->basket);
            $basket = [];
            $index = 0;

            // Process each product in the basket
            foreach($products as $product) {

                // Find out the product price, quantity, discount rate, and promotions
                $originalPrice = $this->getProductPriceBaseOnUserGroup($product);
                $qty = $this->basket[$product->id];
                $discount_percentage = 0;
                $discount = 0;
                $eligiblePromotions = [];

                // Process each promotion associated with the product
                foreach ($product->promotions as $promotion) {

                    // Check the user is eligible for the promotion
                    if ($this->isEligibleForPromotion($promotion)) {

                        // Store the promotion
                        $eligiblePromotion = [];
                        $eligiblePromotion['name'] = $promotion->name;
                        $eligiblePromotion['type'] = $promotion->type;
                        $eligiblePromotion['description'] = $promotion->description;
                        $eligiblePromotion['apply_to_group'] = $promotion->apply_to_group;
                        $eligiblePromotion['starting_date'] = $promotion->starting_date;
                        $eligiblePromotion['end_date'] = $promotion->end_date;

                        // Calculate the bonus for buy one get one free type promotion
                        if ($promotion->type == 'buy_one_get_one_free') {

                            // Get the minimum quantity to qualify for the promotion
                            // Get the bonus quantity for the promotion
                            // Calculate the quantity of free products granted
                            $minimum_qty = $promotion->buy_one_get_one_free->minimum_qty;
                            $bonus_qty = $promotion->buy_one_get_one_free->bonus_qty;
                            $free_qty = floor($qty / $minimum_qty) * $bonus_qty;

                            // Store the quantity of free products and the discount saved by the promotion
                            $eligiblePromotion['free_qty'] = $free_qty;
                            $discount +=  $originalPrice * $free_qty;

                        }
                        // Calculate the bonus for price discount type promotion
                        elseif ($promotion->type == 'price_discount') {

                            // Get the discount percentage for the promotion
                            // Add the discount towards the currently calculated discount rate on the product
                            $promotion_discount = $promotion->price_discount->discount_percentage;
                            $discount_percentage = $discount_percentage + $promotion_discount;

                            // Store the discount percentage and make a note of the original product price
                            $eligiblePromotion['discount_percentage'] = $promotion_discount;
                            $eligiblePromotion['original_price'] = $originalPrice;
                        }

                        // Add the Promotion to the eligible list
                        $eligiblePromotions[] = $eligiblePromotion;
                    }
                }

                // Calculate the price after the promotion discount rate
                $price = $this->applyDiscount($originalPrice, $discount_percentage);

                // Calculate the total before and after discount
                $total = $price * $qty;
                $beforeDiscountTotal = $originalPrice * $qty;

                // Calculate discount saved
                $discount += $beforeDiscountTotal - $total;

                // Add the amounts toward subtotal and total discount
                $this->subtotal += $total;
                $this->discount += $discount;

                // Push the product information into basket array
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

        // Calculate Grand total and GST
        $this->GST = round($this->subtotal * $this->tax, 2);
        $this->total = $this->subtotal + $this->GST + $this->shippingCost;
    }

    /**
     * Determine the price of the product on user's group
     *
     * @param $product
     * @return double
     */
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

    /**
     * Check the user is eligible for the promotion
     *
     * @param $promotion
     * @return boolean
     */
    private function isEligibleForPromotion($promotion)
    {
        $userGroup = $this->user->group;

        $eligible =
            ($promotion->apply_to_group == $userGroup) &
            ($promotion->isActive) &
            (Carbon::now()->between($promotion->starting_date, $promotion->end_date));

        return $eligible;
    }

    /**
     * Calculate the product price after the discount percentage
     *
     * @param $originalPrice
     * @param $discount_percentage
     * @return double
     */
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

    /**
     * Update the Shopping basket saved in session
     *
     * @param $request
     */
    public function updateBasket($request) {

        $update = $request->only([
            'product_id',
            'product_quantity'
        ]);

        $basket = $request->session()->get('basket', []);

        // Remove the product if the update quantity is zero
        if ($update['product_quantity'] == 0) {
            unset($basket[$update['product_id']]);
        }
        else {
            $basket[$update['product_id']] = $update['product_quantity'];
        }

        session()->put('basket', $basket);
    }

    /**
     * Get the shipping address saved in session or use the User account address if there is none
     */
    public function getShippingAddress()
    {
        if (empty($this->shippingAddress)) {
            $this->shippingAddress = $this->repository->createUserShippingAddress($this->user);
        }
    }

    /**
     * Update the shipping address saved in session
     *
     * @param $request
     */
    public function updateShippingAddress($request)
    {
        $update = $request->only([
            'shipping_title',
            'shipping_first_name',
            'shipping_last_name',
            'shipping_street_address_one',
            'shipping_street_address_two',
            'shipping_city',
            'shipping_state',
            'shipping_country',
            'shipping_postcode',
            'shipping_phone'
        ]);

        $shippingAddress['title'] = $update['shipping_title'];
        $shippingAddress['first_name'] = $update['shipping_first_name'];
        $shippingAddress['last_name'] = $update['shipping_last_name'];
        $shippingAddress['street'] = $update['shipping_street_address_one'];
        $shippingAddress['suburb'] = $update['shipping_street_address_two'];
        $shippingAddress['city'] = $update['shipping_city'];
        $shippingAddress['state'] = $update['shipping_state'];
        $shippingAddress['country'] = $update['shipping_country'];
        $shippingAddress['postcode'] = $update['shipping_postcode'];
        $shippingAddress['phone'] = $update['shipping_phone'];

        $this->shippingAddress = $shippingAddress;
        session()->put('shippingAddress', $this->shippingAddress);
    }

    /**
     * Get the billing address saved in session or use the User account address if there is none
     */
    public function getBillingAddress()
    {
        if (empty($this->billingAddress)) {
            $this->billingAddress = $this->repository->createUserBillingAddress($this->user);
        }
    }

    /**
     * Update the billing address saved in session
     *
     * @param $request
     */
    public function updateBillingAddress($request)
    {
        $update = $request->only([
            'billing_title',
            'billing_first_name',
            'billing_last_name',
            'billing_street_address_one',
            'billing_street_address_two',
            'billing_city',
            'billing_state',
            'billing_country',
            'billing_postcode',
        ]);

        $billingAddress['title'] = $update['billing_title'];
        $billingAddress['first_name'] = $update['billing_first_name'];
        $billingAddress['last_name'] = $update['billing_last_name'];
        $billingAddress['street'] = $update['billing_street_address_one'];
        $billingAddress['suburb'] = $update['billing_street_address_two'];
        $billingAddress['city'] = $update['billing_city'];
        $billingAddress['state'] = $update['billing_state'];
        $billingAddress['country'] = $update['billing_country'];
        $billingAddress['postcode'] = $update['billing_postcode'];

        $this->billingAddress = $billingAddress;
        session()->put('billingAddress', $this->billingAddress);
    }

    /**
     * Create a new order using the items in the shopping cart
     *
     * @return \App\Order
     */
    public function createOrder()
    {
        $shoppingCart = $this;

        $order = $this->repository->createOrder(
            $this->user,
            $shoppingCart
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
}