<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Update Order status to Received as Admin');
$I->login('13533test@gmail.com', 'admin2d42#4baeo43@');
$I->amonPage('/account/admin-orders/received');

$I->selectOption('//select[@order="1000" and @name="order_status"]', 'Order Received');
$I->click('//button[@order="1000" and contains(., "Update")]');

$I->seeCurrentUrlEquals('/account/admin-orders/received');
$I->see('Order No. 1000 status updated to Order Received');

$I->seeInDatabase('orders', array(
    'id' => 1000,
    'order_status' => 'Order Received'
));
