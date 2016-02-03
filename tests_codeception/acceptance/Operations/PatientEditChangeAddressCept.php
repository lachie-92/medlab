<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Change Address as Patient');
$I->login('patientemailtest321@gmail.com', 'testtest');
$I->amonPage('/account/edit');

$I->fillField('street_address_one', 'changed');
$I->fillField('street_address_two', 'changed');
$I->selectOption('country', 'New Zealand');
$I->selectOption('state', 'Auckland');
$I->fillField('postcode', '1233');
$I->fillField('telephone', '3414145');
$I->fillField('mobile_phone', '134141415');
$I->click('#address_update_btn');

$I->see('Address has been updated');
$I->seeInDatabase('customer_addresses', array(
    'id' => 2,
    'type' => 'Account',
    'street' => 'changed',
    'suburb' => 'changed',
    'state' => 'Auckland',
    'country' => 'New Zealand',
    'postcode' => '1233'
));

$I->seeInDatabase('customer_numbers', array(
    'id' => 3,
    'type' => 'Account Phone',
    'number' => '3414145'
));

$I->seeInDatabase('customer_numbers', array(
    'id' => 4,
    'type' => 'Account Mobile',
    'number' => '134141415',
));