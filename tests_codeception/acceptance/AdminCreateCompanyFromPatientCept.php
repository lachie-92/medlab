<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Create Company from Patient Registration as Admin');
$I->login('13533test@gmail.com', 'admin2d42#4baeo43@');
$I->amonPage('/account/patient-registration');

$I->click('//a[@href="/account/patient-registration/1" and contains(., "View")]');
$I->see('New Patient Registration');

$I->click('//a[@href="/account/practitioner-registration/new/1" and contains(., "Create a New Practitioner")]');
$I->see('New Practitioner Registration');

$I->click('//div[@href="#create_clinic_box" and @data-toggle="collapse"]');

$I->fillField('create_new_clinic_name', 'company one');
$I->selectOption('create_new_business_type', 'Company');
$I->fillField('create_new_business_number', '213441');
$I->fillField('create_new_street_address_one', 'street');
$I->fillField('create_new_street_address_two', 'suburb');
$I->fillField('create_new_city', 'sydney');
$I->selectOption('create_new_state', 'NSW');
$I->selectOption('create_new_country', 'Australia');
$I->fillField('create_new_postcode', '1234');

$I->click('#create_new_clinic_btn');
$I->wait(5);
$I->seeInPopup('Company has been created');
$I->acceptPopup();

$I->seeInDatabase('companies', array(
    'id' => 2,
    'name' => 'company one',
    'business_type' => 'company',
    'business_number' => '213441',
    'country' => 'AU',
));

$I->seeInDatabase('company_addresses', array(
    'id' => 2,
    'type' => 'Physical',
    'address' => 'street suburb',
    'street' => 'street',
    'suburb' => 'suburb',
    'city' => 'sydney',
    'state' => 'NSW',
    'country' => 'AU',
    'postcode' => '1234',
    'company_id' => 2
));