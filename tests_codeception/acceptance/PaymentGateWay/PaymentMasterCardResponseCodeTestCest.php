<?php
namespace PaymentGateWayTest;
use \AcceptanceTester;

class PaymentMasterCardResponseCodeTestCest
{
    //
    // Card Details
    //
    protected $cardNumber = '5123456789012346';
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

    public function invokeMasterCardResponseCode0(AcceptanceTester $I)
    {
        $testProduct = $this->getTestProductReady($I, $this->response0Trigger);
        $this->getShoppingCartReady($I, $testProduct);

        $I->click('//img[@name="MasterCard"]');
        $I->fillField('cardno', $this->cardNumber);
        $I->fillField('cardexpirymonth', $this->expiryMonth);
        $I->fillField('cardexpiryyear', $this->expiryYear);
        $I->fillField('cardsecurecode', $this->securityCodeValid);
        $I->click('#Paybutton');

        $I->wait(10);
        $I->wait(10);
        $I->seeCurrentUrlEquals('/shoppingcart/digitalcheckout');
        $I->see('Your order is currently being processed and you should receive a confirmation in your email:');

        $I->seeInDatabase('orders', array(
            'id' => 1001,
            'user_id' => 3,
            'payment_type' => 'MC',
            'order_status' => 'Order Received',
            'transaction_status' => 'Complete'
        ));
    }

    public function invokeMasterCardResponseCode1(AcceptanceTester $I)
    {
        $testProduct = $this->getTestProductReady($I, $this->response1Trigger);
        $this->getShoppingCartReady($I, $testProduct);

        $I->click('//img[@name="MasterCard"]');
        $I->fillField('cardno', $this->cardNumber);
        $I->fillField('cardexpirymonth', $this->expiryMonth);
        $I->fillField('cardexpiryyear', $this->expiryYear);
        $I->fillField('cardsecurecode', $this->securityCodeValid);
        $I->click('#Paybutton');

        $I->wait(10);
        $I->wait(10);
        $I->seeCurrentUrlEquals('/shoppingcart/summary');
        $I->see('Transaction could not be processed');

        $I->seeInDatabase('orders', array(
            'id' => 1001,
            'user_id' => 3,
            'payment_type' => '',
            'order_status' => 'New Order',
            'transaction_status' => 'Transaction could not be processed'
        ));
    }

    public function invokeMasterCardResponseCode2(AcceptanceTester $I)
    {
        $testProduct = $this->getTestProductReady($I, $this->response2Trigger);
        $this->getShoppingCartReady($I, $testProduct);

        $I->click('//img[@name="MasterCard"]');
        $I->fillField('cardno', $this->cardNumber);
        $I->fillField('cardexpirymonth', $this->expiryMonth);
        $I->fillField('cardexpiryyear', $this->expiryYear);
        $I->fillField('cardsecurecode', $this->securityCodeValid);
        $I->click('#Paybutton');

        $I->wait(10);
        $I->wait(10);
        $I->seeCurrentUrlEquals('/shoppingcart/summary');
        $I->see('Transaction Declined. Contact Issuing Bank');

        $I->seeInDatabase('orders', array(
            'id' => 1001,
            'user_id' => 3,
            'payment_type' => '',
            'order_status' => 'New Order',
            'transaction_status' => 'Transaction Declined. Contact Issuing Bank'
        ));
    }

    public function invokeMasterCardResponseCode4(AcceptanceTester $I)
    {
        $testProduct = $this->getTestProductReady($I, $this->response4Trigger);
        $this->getShoppingCartReady($I, $testProduct);

        $I->click('//img[@name="MasterCard"]');
        $I->fillField('cardno', $this->cardNumber);
        $I->fillField('cardexpirymonth', $this->expiryMonth);
        $I->fillField('cardexpiryyear', $this->expiryYear);
        $I->fillField('cardsecurecode', $this->securityCodeValid);
        $I->click('#Paybutton');

        $I->wait(10);
        $I->wait(10);
        $I->seeCurrentUrlEquals('/shoppingcart/summary');
        $I->see('Card has Expired');

        $I->seeInDatabase('orders', array(
            'id' => 1001,
            'user_id' => 3,
            'payment_type' => '',
            'order_status' => 'New Order',
            'transaction_status' => 'Card has Expired'
        ));
    }

    public function invokeMasterCardResponseCode5(AcceptanceTester $I)
    {
        $testProduct = $this->getTestProductReady($I, $this->response5Trigger);
        $this->getShoppingCartReady($I, $testProduct);

        $I->click('//img[@name="MasterCard"]');
        $I->fillField('cardno', $this->cardNumber);
        $I->fillField('cardexpirymonth', $this->expiryMonth);
        $I->fillField('cardexpiryyear', $this->expiryYear);
        $I->fillField('cardsecurecode', $this->securityCodeValid);
        $I->click('#Paybutton');

        $I->wait(10);
        $I->wait(10);
        $I->seeCurrentUrlEquals('/shoppingcart/summary');
        $I->see('Insufficient Credit');

        $I->seeInDatabase('orders', array(
            'id' => 1001,
            'user_id' => 3,
            'payment_type' => '',
            'order_status' => 'New Order',
            'transaction_status' => 'Insufficient Credit'
        ));
    }

    public function invokeMasterCardResponseCodeE(AcceptanceTester $I)
    {
        $testProduct = $this->getTestProductReady($I, $this->responseETrigger);
        $this->getShoppingCartReady($I, $testProduct);

        $I->click('//img[@name="MasterCard"]');
        $I->fillField('cardno', $this->cardNumber);
        $I->fillField('cardexpirymonth', $this->expiryMonth);
        $I->fillField('cardexpiryyear', $this->expiryYear);
        $I->fillField('cardsecurecode', $this->securityCodeValid);
        $I->click('#Paybutton');

        $I->wait(10);
        $I->wait(10);
        $I->seeCurrentUrlEquals('/shoppingcart/summary');
        $I->see('Transaction Declined. Contact Issuing Bank');

        $I->seeInDatabase('orders', array(
            'id' => 1001,
            'user_id' => 3,
            'payment_type' => '',
            'order_status' => 'New Order',
            'transaction_status' => 'Transaction Declined. Contact Issuing Bank'
        ));
    }

    public function invokeMasterCardCSCResultCodeP(AcceptanceTester $I)
    {
        $testProduct = $this->getTestProductReady($I, $this->response0Trigger);
        $this->getShoppingCartReady($I, $testProduct);

        $I->click('//img[@name="MasterCard"]');
        $I->fillField('cardno', $this->cardNumber);
        $I->fillField('cardexpirymonth', $this->expiryMonth);
        $I->fillField('cardexpiryyear', $this->expiryYear);
        $I->fillField('cardsecurecode', $this->securityCodeNotProcessed);
        $I->click('#Paybutton');

        $I->wait(10);
        $I->wait(10);
        $I->seeCurrentUrlEquals('/shoppingcart/digitalcheckout');
        $I->see('Your order is currently being processed and you should receive a confirmation in your email:');

        $I->seeInDatabase('orders', array(
            'id' => 1001,
            'user_id' => 3,
            'payment_type' => 'MC',
            'order_status' => 'Order Received',
            'transaction_status' => 'Complete'
        ));
    }

    public function invokeMasterCardCSCResultCodeN(AcceptanceTester $I)
    {
        $testProduct = $this->getTestProductReady($I, $this->response0Trigger);
        $this->getShoppingCartReady($I, $testProduct);

        $I->click('//img[@name="MasterCard"]');
        $I->fillField('cardno', $this->cardNumber);
        $I->fillField('cardexpirymonth', $this->expiryMonth);
        $I->fillField('cardexpiryyear', $this->expiryYear);
        $I->fillField('cardsecurecode', $this->securityCodeInvalid);
        $I->click('#Paybutton');

        $I->wait(10);
        $I->wait(10);
        $I->seeCurrentUrlEquals('/shoppingcart/summary');
        $I->see('Transaction auto-declined due to unacceptable CSC value.');

        $I->seeInDatabase('orders', array(
            'id' => 1001,
            'user_id' => 3,
            'payment_type' => '',
            'order_status' => 'New Order',
            'transaction_status' => 'Transaction auto-declined due to unacceptable CSC value.'
        ));
    }
}
