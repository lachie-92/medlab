<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Change Email Address as Practitioner');
$I->login('practitioneremailtest321@gmail.com', 'testtest');
$I->amonPage('/account/edit');

$I->fillField('email', 'practitioneremailtest3210@gmail.com');
$I->click('#email_update_btn');

$I->see('Email has been updated');
$I->seeInDatabase('users', array(
    'id' => 2,
    'email' => 'practitioneremailtest3210@gmail.com',
));