<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Approve Patient Registration as Admin');
$I->login('13533test@gmail.com', 'admin2d42#4baeo43@');
$I->amonPage('/account/patient-registration');

$I->click('//a[@href="/account/patient-registration/1" and contains(., "View")]');
$I->see('New Patient Registration');

$I->fillField('email', 'regpatientemailtest3210@gmail.com');
$I->selectOption('title', 'Ms');
$I->fillField('first_name', 'Patient changed');
$I->fillField('last_name', 'Codeception changed');

$I->fillField('street_address_one', 'street changed');
$I->fillField('street_address_two', 'suburb changed');
$I->fillField('city', 'sydney changed');
$I->selectOption('country', 'New Zealand');
$I->selectOption('state', 'Auckland');
$I->fillField('postcode', '1233');
$I->fillField('telephone', '34141333');
$I->fillField('mobile_phone', '13414141333');

$I->selectOPtion('#practitioner_state_select', 'NSW');
$I->click('#find_practitioner_btn');
$I->waitForJS("return $.active == 0;", 10);
$I->selectOption('//input[@type="radio" and @name="practitioner_id"]', '1');

$I->click('//button[@title="Register" and contains(., "Create Patient Account")]');
$I->seeCurrentUrlEquals('/account/patient-registration');
$I->see('Account has been created');

$I->seeInDatabase('patient_registrations', array(
    'id' => 1,
    'email' => 'regpatientemailtest3210@gmail.com',
    'title' => 'Ms',
    'first_name' => 'Patient changed',
    'last_name' => 'Codeception changed',
    'street' => 'street changed',
    'suburb' => 'suburb changed',
    'city' => 'sydney changed',
    'state' => 'Auckland',
    'country' => 'New Zealand',
    'postcode' => '1233',
    'telephone' => '34141333',
    'mobile_phone' => '13414141333',
    'practitioner_id' => 1,
    'practitioner_not_found' => false,
    'practitioner_name' => 'practitioner test',
    'practitioner_clinic' => 'company one',
    'practitioner_city' => 'Sydney',
    'practitioner_state' => 'NSW',
    'practitioner_country' => 'Australia',
    'practitioner_postcode' => '2077',
));

$I->dontSeeInDatabase('patient_registrations', array(
    'id' => 1,
    'approval' => null,
));

$I->seeInDatabase('customers', array(
    'id' => 4,
    'title' => 'Ms',
    'name' => 'Patient changed Codeception changed',
    'first_name' => 'Patient changed',
    'last_name' => 'Codeception changed',
    'country' => 'New Zealand',
));

$I->seeInDatabase('customer_addresses', array(
    'id' => 3,
    'type' => 'Account',
    'address' => 'street changed suburb changed',
    'street' => 'street changed',
    'suburb' => 'suburb changed',
    'city' => 'sydney changed',
    'state' => 'Auckland',
    'country' => 'New Zealand',
    'postcode' => '1233',
    'customer_id' => 4
));

$I->seeInDatabase('customer_numbers', array(
    'id' => 5,
    'type' => 'Account Phone',
    'number' => '34141333',
    'customer_id' => 4
));

$I->seeInDatabase('customer_numbers', array(
    'id' => 6,
    'type' => 'Account Mobile',
    'number' => '13414141333',
    'customer_id' => 4
));

$I->seeInDatabase('users', array(
    'id' => 4,
    'email' => 'regpatientemailtest3210@gmail.com',
    'group' => 'Patient',
    'newsletter_subscription' => false,
    'approved_by' => 'Admin',
    'status' => 'Active',
    'timezone' => 'New Zealand',
    'customer_id' => 4
));

$I->seeInDatabase('patients', array(
    'id' => 2,
    'user_id' => 4,
    'practitioner_id' => 1
));