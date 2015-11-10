<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Change Email Address as Patient');
$I->login('patientemailtest321@gmail.com', 'testtest');
$I->amonPage('/account/edit');

$I->fillField('email', 'patientemailtest3210@gmail.com');
$I->click('#email_update_btn');

$I->see('Email has been updated');
$I->seeInDatabase('users', array(
    'id' => 3,
    'email' => 'patientemailtest3210@gmail.com',
));