<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Register for a Patient user without a Practitioner');
$I->amonPage('/account/register/patient');

$I->fillField('email', 'regpatientemailtest321@gmail.com');
$I->selectOption('title', 'Mr');
$I->fillField('first_name', 'Patient');
$I->fillField('last_name', 'Codeception');
$I->fillField('password', 'testtest');
$I->fillField('password_confirmation', 'testtest');

$I->fillField('street_address_one', 'street');
$I->fillField('street_address_two', 'suburb');
$I->fillField('city', 'sydney');
$I->selectOption('state', 'NSW');
$I->selectOption('country', 'Australia');
$I->fillField('postcode', '1234');
$I->fillField('telephone', '341414');
$I->fillField('mobile_phone', '13414141');

$I->checkOption('#practitioner_not_found');
$I->wait(2);
$I->fillField('practitioner_not_found_practitioner_name', 'Dr. Practitioner Test');
$I->fillField('practitioner_not_found_clinic', 'Company one');
$I->fillField('practitioner_not_found_postcode', '1234');
$I->fillField('practitioner_not_found_city', 'sydney');
$I->selectOption('practitioner_not_found_state', 'NSW');
$I->selectOption('practitioner_not_found_country', 'Australia');

$I->checkOption('//input[@type="checkbox" and @name="agree"]');
$I->click('//button[@type="submit" and contains(., "Submit")]');
$I->seeInDatabase('patient_registrations', array(
    'email' => 'regpatientemailtest321@gmail.com',
    'title' => 'Mr',
    'first_name' => 'Patient',
    'last_name' => 'Codeception',
    'street' => 'street',
    'suburb' => 'suburb',
    'city' => 'sydney',
    'state' => 'NSW',
    'country' => 'Australia',
    'postcode' => '1234',
    'telephone' => '341414',
    'mobile_phone' => '13414141',
    'practitioner_not_found' => true,
    'practitioner_name' => 'Dr. Practitioner Test',
    'practitioner_clinic' => 'Company one',
    'practitioner_city' => 'sydney',
    'practitioner_state' => 'NSW',
    'practitioner_country' => 'Australia',
    'practitioner_postcode' => '1234',
));
