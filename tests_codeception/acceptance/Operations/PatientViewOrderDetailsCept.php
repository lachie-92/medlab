<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('see my order in details as Patient');
$I->login('patientemailtest321@gmail.com', 'testtest');
$I->amonPage('/account/orders');

$I->click('//button[@order="1000" and contains(., "View")]');

$I->seeCurrentUrlEquals('/account/orders/details');
$I->see('Order Details');
$I->see('Order No.: 1000');