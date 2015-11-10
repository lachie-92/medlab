<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Login Admin User');

$I->amOnPage('/account/login');
$I->fillField('email', '13533test@gmail.com');
$I->fillField('password', 'admin2d42#4baeo43@');
$I->click('//button[@type="submit" and contains(., "Login")]');

$I->see('Approved Patient Registration');
