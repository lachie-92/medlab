<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Approve Practitioner Registration as Admin');
$I->login('13533test@gmail.com', 'admin2d42#4baeo43@');
$I->amonPage('/account/practitioner-registration');

$I->click('//a[@href="/account/practitioner-registration/1" and contains(., "View")]');
$I->see('New Practitioner Registration');

$I->fillField('email', 'regpractitioneremailtest3210@gmail.com');
$I->selectOption('title', 'Mr');
$I->fillField('first_name', 'Practitioner');
$I->fillField('last_name', 'Codeception');
$I->fillField('association_number', '21412341');
$I->fillField('association_type', 'Australia Medical');
$I->fillField('telephone', '341414');
$I->fillField('mobile_phone', '13414141');

$I->selectOPtion('#company_state_select', 'NSW');
$I->click('#find_company_btn');
$I->waitForJS("return $.active == 0;", 10);
$I->selectOption('//input[@type="radio" and @name="company_id"]', '1');

$I->click('//button[@title="Register" and contains(., "Create Practitioner Account")]');
$I->seeCurrentUrlEquals('/account/practitioner-registration');
$I->see('Account has been created');

$I->seeInDatabase('practitioner_registrations', array(
    'id' => 1,
    'email' => 'regpractitioneremailtest3210@gmail.com',
    'title' => 'Mr',
    'first_name' => 'Practitioner',
    'last_name' => 'Codeception',
    'company_id' => 1,
    'clinic_name' => 'company one',
    'business_type' => 'company',
    'business_number' => '01234',
    'association_number' => '21412341',
    'association_type' => 'Australia Medical',
    'street' => '123 Fake Street',
    'suburb' => 'Hornsby',
    'state' => 'NSW',
    'country' => 'Australia',
    'postcode' => '2077',
    'telephone' => '341414',
    'mobile_phone' => '13414141'
));

$I->dontSeeInDatabase('practitioner_registrations', array(
    'id' => 1,
    'approval' => null,
));

$I->seeInDatabase('customers', array(
    'id' => 4,
    'title' => 'Mr',
    'name' => 'Practitioner Codeception',
    'first_name' => 'Practitioner',
    'last_name' => 'Codeception',
    'country' => 'Australia',
));

$I->seeInDatabase('customer_addresses', array(
    'id' => 3,
    'type' => 'Account',
    'address' => '123 Fake Street Hornsby',
    'street' => '123 Fake Street',
    'suburb' => 'Hornsby',
    'state' => 'NSW',
    'country' => 'Australia',
    'postcode' => '2077',
    'customer_id' => 4
));

$I->seeInDatabase('customer_numbers', array(
    'id' => 5,
    'type' => 'Account Phone',
    'number' => '341414',
    'customer_id' => 4
));

$I->seeInDatabase('customer_numbers', array(
    'id' => 6,
    'type' => 'Account Mobile',
    'number' => '13414141',
    'customer_id' => 4
));

$I->seeInDatabase('users', array(
    'id' => 4,
    'email' => 'regpractitioneremailtest3210@gmail.com',
    'group' => 'Practitioner',
    'newsletter_subscription' => false,
    'approved_by' => 'Admin',
    'status' => 'Active',
    'timezone' => 'Australia',
    'association_number' => '21412341',
    'association_type' => 'Australia Medical',
    'customer_id' => 4
));

$I->seeInDatabase('practitioners', array(
    'id' => 2,
    'user_id' => 4,
    'company_id' => 1
));
