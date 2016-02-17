<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Buy something as Practitioner');
$I->login('practitioneremailtest321@gmail.com', 'testtest');
$I->amonPage('/nutraceuticals/products');

$I->click('//button[@product="1" and @title="Add to Cart"]');
$I->seeCurrentUrlEquals('/shoppingcart/cart');
$I->see('Biotic Jnr.');
$I->seeInField('#product_qty_0', '1');

$I->click('//button[@data-qty-plus-button="" and @target="product_qty_0"]');
$I->click('//button[@data-qty-plus-button="" and @target="product_qty_0"]');
$I->click('//button[@data-qty-plus-button="" and @target="product_qty_0"]');
$I->click('//button[@data-qty-minus-button="" and @target="product_qty_0"]');
$I->click('//button[@type="submit" and @target="product_qty_0" and contains(., "Update")]');
$I->seeInField('#product_qty_0', '3');
$I->see('$38.08', '//table[@id="cart_list"]/tbody/tr[1]/td[5]');
$I->see('$114.24', '//table[@id="cart_list"]/tbody/tr[1]/td[6]');

$I->click('//a[@href="/nutraceuticals/products/"]');
$I->seeCurrentUrlEquals('/nutraceuticals/products/');
$I->click('//button[@product="2" and contains(., "Learn More")]');
$I->seeCurrentUrlEquals('/nutraceuticals/products/enbiotic-120s');
$I->click('//button[@title="Add to Cart" and contains(., "Add to Cart")]');

$I->seeCurrentUrlEquals('/shoppingcart/cart');
$I->see('Enbiotic 120\'s');
$I->seeInField('#product_qty_1', '1');
$I->click('//button[@data-qty-plus-button="" and @target="product_qty_1"]');
$I->click('//button[@type="submit" and @target="product_qty_1" and contains(., "Update")]');
$I->seeInField('#product_qty_1', '2');
$I->see('$51.17', '//table[@id="cart_list"]/tbody/tr[2]/td[5]');
$I->see('$102.34', '//table[@id="cart_list"]/tbody/tr[2]/td[6]');
$I->see('$216.58', '//table[@id="cart_summary"]/tbody//th[contains(., "Subtotal")]/ancestor::tr/td');
$I->see('$21.66', '//table[@id="cart_summary"]/tbody//th[contains(., "GST")]/ancestor::tr/td');
$I->see('FREE', '//table[@id="cart_summary"]/tbody//th[contains(., "Shipping")]/ancestor::tr/td');
$I->see('$238.24', '//table[@id="cart_summary"]/tbody//th[contains(., "Total")]/ancestor::tr/td');
$I->click('//a[@href="/shoppingcart/address"]');

$I->seeCurrentUrlEquals('/shoppingcart/address');
$I->selectOption('shipping_title', 'Mr');
$I->fillField('shipping_first_name', 'Test');
$I->fillField('shipping_last_name', 'Codeception');
$I->fillField('shipping_street_address_one', 'street');
$I->fillField('shipping_street_address_two', 'suburb');
$I->selectOption('shipping_state', 'NSW');
$I->selectOption('shipping_country', 'Australia');
$I->fillField('shipping_postcode', '1234');
$I->fillField('shipping_phone', '341414');
$I->selectOption('billing_title', 'Mr');
$I->fillField('billing_first_name', 'Test');
$I->fillField('billing_last_name', 'Codeception');
$I->fillField('billing_street_address_one', 'street');
$I->fillField('billing_street_address_two', 'suburb');
$I->selectOption('billing_state', 'NSW');
$I->selectOption('billing_country', 'Australia');
$I->fillField('billing_postcode', '1234');
$I->click('//button[@type="submit"]');

$I->seeInDatabase('orders', array(
    'id' => 1001,
    'user_id' => 2,
    'shipping_address_title' => 'Mr',
    'shipping_address_first_name' => 'Test',
    'shipping_address_last_name' => 'Codeception',
    'shipping_address_street' => 'street',
    'shipping_address_suburb' => 'suburb',
    'shipping_address_state' => 'NSW',
    'shipping_address_country' => 'Australia',
    'shipping_address_postcode' => '1234',
    'shipping_address_phone' => '341414',
    'billing_address_title' => 'Mr',
    'billing_address_first_name' => 'Test',
    'billing_address_last_name' => 'Codeception',
    'billing_address_street' => 'street',
    'billing_address_suburb' => 'suburb',
    'billing_address_state' => 'NSW',
    'billing_address_country' => 'Australia',
    'billing_address_postcode' => '1234',
    'order_status' => 'New Order',
    'subtotal' => 216.58,
    'GST' => 21.66,
    'shipping_cost' => 0,
    'discount' => 0,
    'grand_total' => 238.24
));

$I->seeInDatabase('orderedProducts', array(
    'id' => 4,
    'order_id' => 1001,
    'product_name' => 'Biotic Jnr.',
    'line_price' => 38.08,
    'line_quantity' => 3,
    'discount_percentage' => 0,
    'discounted_price' => 38.08,
    'line_total' => 114.24,
));

$I->seeInDatabase('orderedProducts', array(
    'id' => 5,
    'order_id' => 1001,
    'product_name' => 'Enbiotic 120\'s',
    'line_price' => 51.17,
    'line_quantity' => 2,
    'discount_percentage' => 0,
    'discounted_price' => 51.17,
    'line_total' => 102.34,
));

$I->seeCurrentUrlEquals('/shoppingcart/summary');
$I->click('#button_payment');

$I->click('//img[@name="Visa"]');
$I->fillField('cardno', '4987654321098769');
$I->fillField('cardexpirymonth', '05');
$I->fillField('cardexpiryyear', '17');
$I->fillField('cardsecurecode', '100');
$I->click('#Paybutton');

$I->wait(10);
$I->wait(10);
$I->seeCurrentUrlEquals('/shoppingcart/digitalcheckout');
$I->see('Your order is currently being processed and you should receive a confirmation in your email:');

$I->seeInDatabase('orders', array(
    'id' => 1001,
    'user_id' => 2,
    'shipping_address_title' => 'Mr',
    'shipping_address_first_name' => 'Test',
    'shipping_address_last_name' => 'Codeception',
    'shipping_address_street' => 'street',
    'shipping_address_suburb' => 'suburb',
    'shipping_address_state' => 'NSW',
    'shipping_address_country' => 'Australia',
    'shipping_address_postcode' => '1234',
    'shipping_address_phone' => '341414',
    'billing_address_title' => 'Mr',
    'billing_address_first_name' => 'Test',
    'billing_address_last_name' => 'Codeception',
    'billing_address_street' => 'street',
    'billing_address_suburb' => 'suburb',
    'billing_address_state' => 'NSW',
    'billing_address_country' => 'Australia',
    'billing_address_postcode' => '1234',
    'payment_type' => 'VC',
    'order_status' => 'Order Received',
    'transaction_status' => 'Complete',
    'subtotal' => 216.58,
    'GST' => 21.66,
    'shipping_cost' => 0,
    'discount' => 0,
    'grand_total' => 238.24
));
