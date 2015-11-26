<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Register for a Practitioner user');
$I->amonPage('/account/register/practitioner');

$I->fillField('email', 'regpractitioneremailtest321@gmail.com');
$I->selectOption('title', 'Mr');
$I->fillField('first_name', 'Practitioner');
$I->fillField('last_name', 'Codeception');
$I->fillField('password', 'testtest');
$I->fillField('password_confirmation', 'testtest');

$I->fillField('clinic_name', 'company one');
$I->selectOption('business_type', 'Company');
$I->fillField('business_number', '213441');
$I->fillField('provider_number', '21412341');

$I->fillField('street_address_one', 'street');
$I->fillField('street_address_two', 'suburb');
$I->fillField('city', 'sydney');
$I->selectOption('state', 'NSW');
$I->selectOption('country', 'Australia');
$I->fillField('postcode', '1234');
$I->fillField('telephone', '341414');
$I->fillField('mobile_phone', '13414141');

$I->checkOption('//input[@type="checkbox" and @name="agree"]');
$I->click('//button[@type="submit" and contains(., "Submit")]');

$I->see('Please wait for our Staff to approve your application.');
$I->seeInDatabase('practitioner_registrations', array(
    'email' => 'regpractitioneremailtest321@gmail.com',
    'title' => 'Mr',
    'first_name' => 'Practitioner',
    'last_name' => 'Codeception',
    'clinic_name' => 'company one',
    'business_type' => 'company',
    'business_number' => '213441',
    'provider_number' => '21412341',
    'street' => 'street',
    'suburb' => 'suburb',
    'city' => 'sydney',
    'state' => 'NSW',
    'country' => 'AU',
    'postcode' => '1234',
    'telephone' => '341414',
    'mobile_phone' => '13414141'
));