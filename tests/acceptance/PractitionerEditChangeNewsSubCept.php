<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Change News Subscription as Practitioner');
$I->login('practitioneremailtest321@gmail.com', 'testtest');
$I->amonPage('/account/edit');

$I->checkOption('//input[@type="checkbox" and @name="newsletter"]');
$I->click('#news_update_btn');

$I->see('Newsletter has been updated');
$I->seeInDatabase('users', array(
    'id' => 2,
    'newsletter_subscription' => true
));
