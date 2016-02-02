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
$I->fillField('association_number', '21412341');
$I->fillField('association_type', 'Australia Medical');

$I->fillField('street_address_one', 'street');
$I->fillField('street_address_two', 'suburb');
$I->selectOption('state', 'NSW');
$I->selectOption('country', 'Australia');
$I->fillField('postcode', '1234');
$I->fillField('telephone', '341414');
$I->fillField('mobile_phone', '13414141');

$I->checkOption('//input[@type="checkbox" and @name="agree"]');
$I->click('//button[@type="submit" and contains(., "Submit")]');

$I->see('Your Registration has been received.');
$I->seeInDatabase('practitioner_registrations', array(
    'email' => 'regpractitioneremailtest321@gmail.com',
    'title' => 'Mr',
    'first_name' => 'Practitioner',
    'last_name' => 'Codeception',
    'clinic_name' => 'company one',
    'business_type' => 'company',
    'business_number' => '213441',
    'association_number' => '21412341',
    'association_type' => 'Australia Medical',
    'street' => 'street',
    'suburb' => 'suburb',
    'state' => 'NSW',
    'country' => 'Australia',
    'postcode' => '1234',
    'telephone' => '341414',
    'mobile_phone' => '13414141'
));