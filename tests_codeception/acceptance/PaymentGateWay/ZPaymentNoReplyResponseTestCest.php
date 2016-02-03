<?php
namespace PaymentGateWayTest;
use \AcceptanceTester;

class ZPaymentNoReplyResponseTestCest
{
    //
    // Card Details
    //
    protected $AMEXCardNumber = '371449635311004';
    protected $masterCardNumber = '5123456789012346';
    protected $visaCardNumber = '4987654321098769';
    protected $expiryMonth = '05';
    protected $expiryYear = '17';
    protected $securityCodeValid = '100';
    protected $securityCodeNotProcessed = '102';
    protected $securityCodeInvalid = '104';


    //
    // Response Trigger Amount
    //
    protected $response0Trigger = 1.00;
    protected $response1Trigger = 1.10;
    protected $response2Trigger = 1.05;
    protected $response3Trigger = 1.68;
    protected $response4Trigger = 1.54;
    protected $response5Trigger = 1.51;
    protected $responseETrigger = 1.01;

    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    protected function getTestProductReady($I, $responseTrigger)
    {
        $I->haveInDatabase('products', [
            'xero_item_id' => 20,
            'product_name_index' => 'Test Product',
            'product_name' => 'Test Product',
            'short_description' => 'Response Trigger',
            'patent' => '',
            'general_summary' => '',
            'practitioner_summary' => '',
            'references' => '',
            'side_effects' => '',
            'interactions' => '',
            'dosage_information' => '',
            'ingredients' => '',
            'cmi' => '',
            'free_from' => '',
            'price_retail' => $responseTrigger,
            'price_wholesale' => $responseTrigger,
            'image_path' => '',
            'thumb_image_path' => '',
            'in_stock' => true
        ]);

        return 20;
    }

    protected function getShoppingCartReady($I, $productId)
    {
        $I->login('patientemailtest321@gmail.com', 'testtest');
        $I->amonPage('/nutraceuticals/products');

        $I->click('//button[@product="' . $productId . '" and @title="Add to Cart"]');
        $I->click('//a[@href="/shoppingcart/address"]');
        $I->click('//button[@type="submit"]');
        $I->click('#button_payment');
    }

    //
    // This will lock the payment gate way for the next 15 minutes
    //
    public function invokeNoReplyResponse(AcceptanceTester $I)
    {
        $testProduct = $this->getTestProductReady($I, $this->response3Trigger);
        $this->getShoppingCartReady($I, $testProduct);

        $I->click('//img[@name="Visa"]');
        $I->fillField('cardno', $this->visaCardNumber);
        $I->fillField('cardexpirymonth', $this->expiryMonth);
        $I->fillField('cardexpiryyear', $this->expiryYear);
        $I->fillField('cardsecurecode', $this->securityCodeValid);
        $I->click('#Paybutton');

        $I->wait(10);
        $I->wait(10);
        $I->seeCurrentUrlEquals('/shoppingcart/summary');
        $I->see('No Reply from Bank Processing Host');

        $I->seeInDatabase('orders', array(
            'id' => 1001,
            'user_id' => 3,
            'payment_type' => '',
            'order_status' => 'New Order',
            'transaction_status' => 'No Reply from Bank Processing Host'
        ));
    }

    public function invokeUndefinedSystemError(AcceptanceTester $I)
    {
        $testProduct = $this->getTestProductReady($I, $this->response0Trigger);
        $this->getShoppingCartReady($I, $testProduct);

        $I->click('//img[@name="Visa"]');
        $I->fillField('cardno', $this->visaCardNumber);
        $I->fillField('cardexpirymonth', $this->expiryMonth);
        $I->fillField('cardexpiryyear', $this->expiryYear);
        $I->fillField('cardsecurecode', $this->securityCodeValid);
        $I->click('#Paybutton');

        $I->wait(10);
        $I->wait(10);
        $I->see('Undefined System Error');
        $I->see('Please contact our support staff on SOME CONTACT DETAILS');

        $I->seeInDatabase('orders', array(
            'id' => 1001,
            'user_id' => 3,
            'payment_type' => '',
            'order_status' => 'New Order',
            'transaction_status' => 'Incomplete'
        ));
    }
}
