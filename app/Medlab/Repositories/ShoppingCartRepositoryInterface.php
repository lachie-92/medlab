<?php
namespace App\Medlab\Repositories;


interface ShoppingCartRepositoryInterface
{
    //
    // Shopping Cart
    //
    public function getProductListInBasket($basketArrayInSession);
    public function checkProductInStock($productId);
    public function createUserShippingAddress($user);
    public function createUserBillingAddress($user);
    public function createOrder($user, $subtotal, $GST, $shippingCost, $discount, $total, $shippingAddress, $billingAddress);
    public function createOrderedProduct($order, $item);
    public function createOrderedProductPromotion($order, $orderedProduct, $promotion);
}