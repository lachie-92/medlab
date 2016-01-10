<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Buy something as Patient');
$I->login('patientemailtest321@gmail.com', 'testtest');
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
$I->see('Your Free Products: 1');
$I->see('$62.83', '//table[@id="cart_list"]/tbody/tr[1]/td[5]');
$I->see('$188.49', '//table[@id="cart_list"]/tbody/tr[1]/td[6]');

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
$I->see('$67.54', '//table[@id="cart_list"]/tbody/tr[2]/td[5]');
$I->see('$135.08', '//table[@id="cart_list"]/tbody/tr[2]/td[6]');
$I->see('$323.57', '//table[@id="cart_summary"]/tbody//th[contains(., "Subtotal")]/ancestor::tr/td');
$I->see('$32.36', '//table[@id="cart_summary"]/tbody//th[contains(., "GST")]/ancestor::tr/td');
$I->see('$11', '//table[@id="cart_summary"]/tbody//th[contains(., "Shipping")]/ancestor::tr/td');
$I->see('$366.93', '//table[@id="cart_summary"]/tbody//th[contains(., "Total")]/ancestor::tr/td');
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
    'user_id' => 3,
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
    'subtotal' => 323.57,
    'GST' => 32.36,
    'shipping_cost' => 11,
    'discount' => 96.61,
    'grand_total' => 366.93
));

$I->seeInDatabase('orderedProducts', array(
    'id' => 4,
    'order_id' => 1001,
    'product_name' => 'Biotic Jnr.',
    'line_price' => 62.83,
    'line_quantity' => 3,
    'discount_percentage' => 0,
    'discounted_price' => 62.83,
    'line_total' => 188.49,
));

$I->seeInDatabase('orderedProducts', array(
    'id' => 5,
    'order_id' => 1001,
    'product_name' => 'FREE - Biotic Jnr.',
    'line_price' => 62.83,
    'line_quantity' => 1,
    'discount_percentage' => 100,
    'discounted_price' => 0,
    'line_total' => 0,
));

$I->seeInDatabase('orderedProducts', array(
    'id' => 6,
    'order_id' => 1001,
    'product_name' => 'Enbiotic 120\'s',
    'line_price' => 84.43,
    'line_quantity' => 2,
    'discount_percentage' => 20,
    'discounted_price' => 67.54,
    'line_total' => 135.08,
));

$I->seeInDatabase('orderedProducts_Promotions', array(
    'id' => 4,
    'orderedProduct_id' => 4,
    'promotion_name' => 'Biotic Jnr. Promotion',
    'type' => 'buy_one_get_one_free',
    'promotion_description' => 'Get one free for every three purchase',
    'promotion_apply_to_group' => 'Patient'
));

$I->seeInDatabase('orderedProducts_Promotions', array(
    'id' => 5,
    'orderedProduct_id' => 5,
    'promotion_name' => 'Biotic Jnr. Promotion',
    'type' => 'buy_one_get_one_free',
    'promotion_description' => 'Get one free for every three purchase',
    'promotion_apply_to_group' => 'Patient'
));

$I->seeInDatabase('orderedProducts_Promotions', array(
    'id' => 6,
    'orderedProduct_id' => 6,
    'promotion_name' => 'Enbiotic 120\'s Sales',
    'type' => 'price_discount',
    'promotion_description' => '20% off Enbiotic 120',
    'promotion_apply_to_group' => 'Patient'
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
    'user_id' => 3,
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
    'payment_type' => 'CreditCard',
    'order_status' => 'Order Received',
    'subtotal' => '323.57',
    'GST' => '32.36',
    'shipping_cost' => '11',
    'discount' => '96.61',
    'grand_total' => '366.93'
));
