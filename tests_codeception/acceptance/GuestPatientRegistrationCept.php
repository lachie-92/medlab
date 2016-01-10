<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Register for a Patient user with a Practitioner found');
$I->amonPage('/account/register/patient');

$I->fillField('email', 'regpatientemailtest321@gmail.com');
$I->selectOption('title', 'Mr');
$I->fillField('first_name', 'Patient');
$I->fillField('last_name', 'Codeception');
$I->fillField('password', 'testtest');
$I->fillField('password_confirmation', 'testtest');

$I->fillField('street_address_one', 'street');
$I->fillField('street_address_two', 'suburb');
$I->selectOption('state', 'NSW');
$I->selectOption('country', 'Australia');
$I->fillField('postcode', '1234');
$I->fillField('telephone', '341414');
$I->fillField('mobile_phone', '13414141');

$I->selectOPtion('#practitioner_state_select', 'NSW');
$I->click('#find_practitioner_btn');
$I->waitForJS("return $.active == 0;", 10);
$I->selectOption('//input[@type="radio" and @name="practitioner_id"]', '1');

$I->checkOption('//input[@type="checkbox" and @name="agree"]');
$I->click('//button[@type="submit" and contains(., "Submit")]');
$I->seeInDatabase('patient_registrations', array(
    'email' => 'regpatientemailtest321@gmail.com',
    'title' => 'Mr',
    'first_name' => 'Patient',
    'last_name' => 'Codeception',
    'street' => 'street',
    'suburb' => 'suburb',
    'state' => 'NSW',
    'country' => 'Australia',
    'postcode' => '1234',
    'telephone' => '341414',
    'mobile_phone' => '13414141',
    'practitioner_not_found' => false,
    'practitioner_name' => 'practitioner test',
    'practitioner_clinic' => 'company one',
    'practitioner_state' => 'NSW',
    'practitioner_country' => 'Australia',
    'practitioner_postcode' => '2077',
));