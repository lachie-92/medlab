<?php

namespace App\Medlab\ShoppingCart;

use App\Medlab\Repositories\ShoppingCartRepositoryInterface;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Session\Store;


class ShoppingCart {

    /**
     * Shipping Cost
     *
     * @var double
     */
    public $shippingCost = 11;

    /**
     * Shipping is free when order total exceed this value
     *
     * @var double
     */
    public $amountRequiredForFreeShipping = 165;

    /**
     * Tax rate
     *
     * @var double
     */
    public $tax = 0.1;

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
    public $subtotal = 0;

    /**
     * The GST for the shopping cart
     *
     * @var double
     */
    public $GST = 0;

    /**
     * The Grand total for the shopping cart
     *
     * @var double
     */
    public $total = 0;

    /**
     * The discount amount for the shopping cart
     *
     * @var double
     */
    public $discount = 0;

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
     * Laravel session
     *
     * @var Store
     */
    protected $session;


    /**
     * Constructor for the Shopping Cart
     *
     * @param ShoppingCartRepositoryInterface $repository
     * @param Store $session
     * @param Guard $auth
     */
    public function __construct(ShoppingCartRepositoryInterface $repository, Store $session, Guard $auth)
    {
        $this->user = $this->userHasLogin = $auth->user();
        $this->repository = $repository;
        $this->session = $session;
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
    public function retrieveBasket()
    {
        // Get basket from session
        $this->basket = $this->session->get('basket', []);

        // Only process the Shopping cart when user is login and shopping cart is not empty
        if ($this->userHasLogin && !empty($this->basket)) {

            // Retrieve the product list from the database
            $products = $this->repository->getProductListInBasket($this->basket);
            $processedBasket = [];
            $index = 0;

            // Process each product in the basket
            foreach($products as $product) {

                // Find out the product price, quantity, discount rate, and promotions
                $price = $product->getProductPriceByUserGroup($this->user->group);
                $qty = $this->basket[$product->id];
                $promotions = [];

                // Process each promotion associated with the product
                foreach ($product->promotions as $promotion) {

                    // Check the user is eligible for the promotion
                    if ($promotion->isEligibleForPromotion($this->user->group)) {

                        $promotions[] = $promotion->applyPromotion($price, $qty);
                    }
                }

                // Calculate the product for the shopping cart
                $discount_percentage = 0;
                $discount = 0;

                foreach ($promotions as $promotion) {

                    $discount_percentage += $promotion['discount_percentage'];
                    $discount += $promotion['discount_from_free_qty'];
                }

                $priceAfterDiscount = $this->applyDiscount($price, $discount_percentage);
                $total = $priceAfterDiscount * $qty;
                $discount += $price * $qty - $total;

                // Add the amounts toward shopping cart subtotal and total discount
                $this->subtotal += $total;
                $this->discount += $discount;

                // Push the product information into basket array
                $processedBasket[] = [
                    'index' => $index++,
                    'product' => $product,
                    'quantity' => $qty,
                    'original_price' => $price,
                    'price' => $priceAfterDiscount,
                    'discount_percentage' => $discount_percentage,
                    'discount' => $discount,
                    'total' => $total,
                    'promotions' => $promotions,
                ];
            }

            $this->basket = $processedBasket;

            //
            // Calculate Grand total
            //
            // Add Subtotal
            $this->total = $this->subtotal;

            // Add GST
            $this->GST = round($this->subtotal * $this->tax, 2);
            $this->total += $this->GST;

            // Add Shipping
            if ($this->total >= $this->amountRequiredForFreeShipping) {
                $this->shippingCost = 0;
            }
            $this->total += $this->shippingCost;
        }
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
            $price = $originalPrice * (100 - $discount_percentage) / 100;
            $price = round($price, 2);
        }
        else {
            $price = 0;
        }

        return $price;
    }

    /**
     * Update the Shopping basket saved in session
     *
     * @param $update
     * @return bool
     */
    public function updateBasket($update) {

        $updateSuccessful = false;
        $basket = $this->session->get('basket', []);

        // Only allows in-stock items to be added to the basket
        $productIsInStock = $this->repository->checkProductInStock($update['product_id']);

        if ($productIsInStock) {

            // Remove the product if the update quantity is zero
            if ($update['product_quantity'] == 0) {
                unset($basket[$update['product_id']]);
            }
            else {
                $basket[$update['product_id']] = $update['product_quantity'];
            }

            $this->session->put('basket', $basket);
            $updateSuccessful = true;
        }

        return $updateSuccessful;
    }

    /**
     * Get the shipping address saved in session or use the User account address if there is none
     */
    public function getShippingAddress()
    {
        // Get Shipping Address from session
        $this->shippingAddress = $this->session->get('shippingAddress', []);

        if (empty($this->shippingAddress)) {
            $this->shippingAddress = $this->repository->createUserShippingAddress($this->user);
        }
        else {
            // Clean up Delivery Option if present
            $this->shippingAddress['delivery_instruction'] =
                ltrim(strstr($this->shippingAddress['delivery_instruction'], ' - '), ' - ');
        }
    }

    /**
     * Update the shipping address saved in session
     *
     * @param $update
     */
    public function updateShippingAddress($update)
    {
        $shippingAddress['title'] = $update['shipping_title'];
        $shippingAddress['first_name'] = $update['shipping_first_name'];
        $shippingAddress['last_name'] = $update['shipping_last_name'];
        $shippingAddress['street'] = $update['shipping_street_address_one'];
        $shippingAddress['suburb'] = $update['shipping_street_address_two'];
        $shippingAddress['state'] = $update['shipping_state'];
        $shippingAddress['country'] = $update['shipping_country'];
        $shippingAddress['postcode'] = $update['shipping_postcode'];
        $shippingAddress['phone'] = $update['shipping_phone'];

        if(empty($update['delivery_instruction']) == true) {
            $shippingAddress['delivery_instruction'] = $update['delivery_option'];
        }
        else {
            $shippingAddress['delivery_instruction'] = $update['delivery_option'] . ' - ' . $update['delivery_instruction'];
        }

        $this->shippingAddress = $shippingAddress;
        session()->put('shippingAddress', $this->shippingAddress);
    }

    /**
     * Get the billing address saved in session or use the User account address if there is none
     */
    public function getBillingAddress()
    {
        // Get Billing Address from session
        $this->billingAddress = $this->session->get('billingAddress', []);

        if (empty($this->billingAddress)) {
            $this->billingAddress = $this->repository->createUserBillingAddress($this->user);
        }
    }

    /**
     * Update the billing address saved in session
     *
     * @param $update
     */
    public function updateBillingAddress($update)
    {
        $billingAddress['title'] = $update['billing_title'];
        $billingAddress['first_name'] = $update['billing_first_name'];
        $billingAddress['last_name'] = $update['billing_last_name'];
        $billingAddress['street'] = $update['billing_street_address_one'];
        $billingAddress['suburb'] = $update['billing_street_address_two'];
        $billingAddress['state'] = $update['billing_state'];
        $billingAddress['country'] = $update['billing_country'];
        $billingAddress['postcode'] = $update['billing_postcode'];

        $this->billingAddress = $billingAddress;
        $this->session->put('billingAddress', $this->billingAddress);
    }

    /**
     * Create a new order using the items in the shopping cart
     *
     * @return \App\Order
     */
    public function createOrder()
    {
        $order = $this->repository->createOrder(
            $this->user,
            $this->subtotal,
            $this->GST,
            $this->shippingCost,
            $this->discount,
            $this->total,
            $this->shippingAddress,
            $this->billingAddress
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