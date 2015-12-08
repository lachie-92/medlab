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
$I->seeCurrentUrlEquals('/nutraceuticals/products/2');
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
$I->see('$11', '//table[@id="cart_summary"]/tbody//th[contains(., "Shipping")]/ancestor::tr/td');
$I->see('$249.24', '//table[@id="cart_summary"]/tbody//th[contains(., "Total")]/ancestor::tr/td');
$I->click('//a[@href="/shoppingcart/address"]');

$I->seeCurrentUrlEquals('/shoppingcart/address');
$I->selectOption('shipping_title', 'Mr');
$I->fillField('shipping_first_name', 'Test');
$I->fillField('shipping_last_name', 'Codeception');
$I->fillField('shipping_street_address_one', 'street');
$I->fillField('shipping_street_address_two', 'suburb');
$I->fillField('shipping_city', 'sydney');
$I->selectOption('shipping_state', 'NSW');
$I->selectOption('shipping_country', 'Australia');
$I->fillField('shipping_postcode', '1234');
$I->fillField('shipping_phone', '341414');
$I->selectOption('billing_title', 'Mr');
$I->fillField('billing_first_name', 'Test');
$I->fillField('billing_last_name', 'Codeception');
$I->fillField('billing_street_address_one', 'street');
$I->fillField('billing_street_address_two', 'suburb');
$I->fillField('billing_city', 'sydney');
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
    'shipping_address_city' => 'sydney',
    'shipping_address_phone' => '341414',
    'billing_address_title' => 'Mr',
    'billing_address_first_name' => 'Test',
    'billing_address_last_name' => 'Codeception',
    'billing_address_street' => 'street',
    'billing_address_suburb' => 'suburb',
    'billing_address_state' => 'NSW',
    'billing_address_country' => 'Australia',
    'billing_address_postcode' => '1234',
    'billing_address_city' => 'sydney',
    'order_status' => 'New Order',
    'subtotal' => 216.58,
    'GST' => 21.66,
    'shipping_cost' => 11,
    'discount' => 0,
    'grand_total' => 249.24
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
$I->wait(10);
$I->switchToIFrame('braintree-dropin-frame');
$I->fillField('#credit-card-number', '4111111111111111');
$I->fillField('#expiration', '1119');
$I->fillField('#cvv', '123');
$I->switchToIFrame();
$I->click('#button_payment');

$I->wait(10);
$I->seeCurrentUrlEquals('/shoppingcart/checkout');
$I->see('Your order is currently being processed and you should receive a confirmation soon.');

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
    'shipping_address_city' => 'sydney',
    'shipping_address_phone' => '341414',
    'billing_address_title' => 'Mr',
    'billing_address_first_name' => 'Test',
    'billing_address_last_name' => 'Codeception',
    'billing_address_street' => 'street',
    'billing_address_suburb' => 'suburb',
    'billing_address_state' => 'NSW',
    'billing_address_country' => 'Australia',
    'billing_address_postcode' => '1234',
    'billing_address_city' => 'sydney',
    'payment_type' => 'CreditCard',
    'order_status' => 'Order Received',
    'subtotal' => 216.58,
    'GST' => 21.66,
    'shipping_cost' => 11,
    'discount' => 0,
    'grand_total' => 249.24
));
