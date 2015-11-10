<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Update Order status to Canceled as Admin');
$I->login('13533test@gmail.com', 'admin2d42#4baeo43@');
$I->amonPage('/account/admin-orders/received');

$I->selectOption('//select[@order="1000" and @name="order_status"]', 'Order Canceled');
$I->click('//button[@order="1000" and contains(., "Update")]');

$I->seeCurrentUrlEquals('/account/admin-orders/canceled');
$I->see('Order No. 1000 status updated to Order Canceled');

$I->seeInDatabase('orders', array(
    'id' => 1000,
    'order_status' => 'Order Canceled'
));
