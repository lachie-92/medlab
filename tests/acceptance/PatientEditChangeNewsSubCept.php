<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Change News Subscription as Patient');
$I->login('patientemailtest321@gmail.com', 'testtest');
$I->amonPage('/account/edit');

$I->checkOption('//input[@type="checkbox" and @name="newsletter"]');
$I->click('#news_update_btn');

$I->see('Newsletter has been updated');
$I->seeInDatabase('users', array(
    'id' => 3,
    'newsletter_subscription' => true
));
