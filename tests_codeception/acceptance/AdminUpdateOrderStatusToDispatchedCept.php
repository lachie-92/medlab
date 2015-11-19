<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Update Order status to Dispatched as Admin');
$I->login('13533test@gmail.com', 'admin2d42#4baeo43@');
$I->amonPage('/account/admin-orders/received');

$I->selectOption('//select[@order="1000" and @name="order_status"]', 'Order Dispatched');
$I->click('//button[@order="1000" and contains(., "Update")]');

$I->seeCurrentUrlEquals('/account/admin-orders/dispatched');
$I->see('Order No. 1000 status updated to Order Dispatched');

$I->seeInDatabase('orders', array(
    'id' => 1000,
    'order_status' => 'Order Dispatched'
));
