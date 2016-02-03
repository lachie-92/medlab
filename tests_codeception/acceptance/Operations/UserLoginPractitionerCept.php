<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Login Practitioner User');

$I->amOnPage('/account/login');
$I->fillField('email', 'practitioneremailtest321@gmail.com');
$I->fillField('password', 'testtest');
$I->click('//button[@type="submit" and contains(., "Login")]');

$I->see('Hello, practitioner test!');
$I->see('My Account Information');
$I->see('Business Information');
