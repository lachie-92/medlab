<?php

namespace App\Library\Repositories;


interface ShoppingCartRepositoryInterface
{
    public function getProductListInBasket($basketArrayInSession);
    public function createUserShippingAddress($user);
    public function createUserBillingAddress($user);
    public function createOrder($user, $shoppingCart);
    public function createOrderedProduct($order, $item);
    public function createOrderedProductPromotion($order, $orderedProduct, $promotion);
}