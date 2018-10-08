<?php

use App\User;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UseShoppingCartTest extends TestCase
{
    //use DatabaseTransactions;

    public function test_it_disallows_guest_to_use_the_shopping_cart()
    {
        Session::start();

        $this->call('GET', '/shoppingcart/cart');
        $this->assertRedirectedTo('/account/login');

        $this->call('POST', '/shoppingcart/update', ['_token' => csrf_token()]);
        $this->assertRedirectedTo('/account/login');

        $this->call('GET', '/shoppingcart/address');
        $this->assertRedirectedTo('/account/login');

        $this->call('POST', '/shoppingcart/address', ['_token' => csrf_token()]);
        $this->assertRedirectedTo('/account/login');

        $this->call('GET', '/shoppingcart/summary');
        $this->assertRedirectedTo('/account/login');

        $this->call('POST', '/shoppingcart/checkout', ['_token' => csrf_token()]);
        $this->assertRedirectedTo('/account/login');
    }

    public function test_it_allows_patient_to_use_the_shopping_cart()
    {
        // Patient
        Session::start();

        $patient = User::where('email', 'patientemailtest321@gmail.com')->first();
        Auth::login($patient);

        $data = [
            '_token' => csrf_token(),
            'product_id' => '1',
            'product_quantity' => '1'
        ];

        $this->call('GET', '/shoppingcart/cart');
        $this->assertResponseOk();
        $this->see('Your shopping cart is empty');

        $this->call('POST', '/shoppingcart/update', $data);
        $this->assertRedirectedTo('/shoppingcart/cart');
        $this->assertSessionHas('basket', [ 1 => 1]);

        $data = [
            '_token' => csrf_token(),
            'product_id' => '1',
            'product_quantity' => '0'
        ];

        $this->call('POST', '/shoppingcart/update', $data);
        $this->assertRedirectedTo('/shoppingcart/cart');
        $this->assertSessionHas('basket', []);

        $this->call('GET', '/account/logout');
    }

    public function test_it_allows_practitioner_to_use_the_shopping_cart()
    {
        // Practitioner
        Session::start();

        $practitioner = User::where('email', 'practitioneremailtest321@gmail.com')->first();
        Auth::login($practitioner);

        $data = [
            '_token' => csrf_token(),
            'product_id' => '2',
            'product_quantity' => '3'
        ];

        $this->call('GET', '/shoppingcart/cart');
        $this->assertResponseOk();
        $this->see('Your shopping cart is empty');

        $this->call('POST', '/shoppingcart/update', $data);
        $this->assertRedirectedTo('/shoppingcart/cart');
        $this->assertSessionHas('basket', [ 2 => 3]);

        $data = [
            '_token' => csrf_token(),
            'product_id' => '2',
            'product_quantity' => '0'
        ];

        $this->call('POST', '/shoppingcart/update', $data);
        $this->assertRedirectedTo('/shoppingcart/cart');
        $this->assertSessionHas('basket', []);

        $this->call('GET', '/account/logout');
    }

    public function test_it_disallows_checkout_with_empty_shopping_cart()
    {
        Session::start();

        // Patient
        $patient = User::where('email', 'patientemailtest321@gmail.com')->first();
        Auth::login($patient);

        $this->call('GET', '/shoppingcart/address');
        $this->assertRedirectedTo('/shoppingcart/cart');

        $this->call('POST', '/shoppingcart/address', ['_token' => csrf_token()]);
        $this->assertRedirectedTo('/shoppingcart/cart');

        $this->call('GET', '/shoppingcart/summary');
        $this->assertRedirectedTo('/shoppingcart/cart');

        $this->call('POST', '/shoppingcart/checkout', ['_token' => csrf_token()]);
        $this->assertRedirectedTo('/shoppingcart/cart');

        Auth::logout();

        // Practitioner
        $practitioner = User::where('email', 'practitioneremailtest321@gmail.com')->first();
        Auth::login($practitioner);

        $this->call('GET', '/shoppingcart/address');
        $this->assertRedirectedTo('/shoppingcart/cart');

        $this->call('POST', '/shoppingcart/address', ['_token' => csrf_token()]);
        $this->assertRedirectedTo('/shoppingcart/cart');

        $this->call('GET', '/shoppingcart/summary');
        $this->assertRedirectedTo('/shoppingcart/cart');

        $this->call('POST', '/shoppingcart/checkout', ['_token' => csrf_token()]);
        $this->assertRedirectedTo('/shoppingcart/cart');

        Auth::logout();
    }

    public function test_it_allows_patient_to_change_billing_and_shipping_address()
    {
        Session::start();

        $patient = User::where('email', 'patientemailtest321@gmail.com')->first();
        Auth::login($patient);
        $this->withSession(['basket' => ['1' => '2']]);

        $this->call('GET', '/shoppingcart/address');
        $this->assertResponseOk();
        $this->see('Shipping Address');
        $this->see('Billing Address');

        $shippingAddress = $this->createShippingAddress();
        $billingAddress = $this->createBillingAddress();
        $data = array_merge($shippingAddress, $billingAddress, ['_token' => csrf_token()]);
        $this->call('POST', '/shoppingcart/address', $data);
        $this->assertRedirectedTo('/shoppingcart/summary');

        $this->assertSessionHas('shippingAddress',[
            'title' => 'Mr',
            'first_name' => 'name',
            'last_name' => 'phpunit',
            'street' => 'street',
            'suburb' => 'suburb',
            'state' => 'NSW',
            'country' => 'Australia',
            'postcode' => '1234',
            'phone' => '12345678',
        ]);

        $this->assertSessionHas('billingAddress',[
            'title' => 'Mr',
            'first_name' => 'name',
            'last_name' => 'phpunit',
            'street' => 'street',
            'suburb' => 'suburb',
            'state' => 'NSW',
            'country' => 'Australia',
            'postcode' => '1234',
        ]);

        Auth::logout();
    }

    public function test_it_allows_practitioner_to_change_billing_and_shipping_address()
    {
        Session::start();

        $practitioner = User::where('email', 'practitioneremailtest321@gmail.com')->first();
        Auth::login($practitioner);
        $this->withSession(['basket' => ['1' => '1']]);

        $this->call('GET', '/shoppingcart/address');
        $this->assertResponseOk();
        $this->see('Shipping Address');
        $this->see('Billing Address');

        $shippingAddress = $this->createShippingAddress();
        $billingAddress = $this->createBillingAddress();
        $data = array_merge($shippingAddress, $billingAddress, ['_token' => csrf_token()]);
        $this->call('POST', '/shoppingcart/address', $data);
        $this->assertRedirectedTo('/shoppingcart/summary');

        $this->assertSessionHas('shippingAddress',[
            'title' => 'Mr',
            'first_name' => 'name',
            'last_name' => 'phpunit',
            'street' => 'street',
            'suburb' => 'suburb',
            'state' => 'NSW',
            'country' => 'Australia',
            'postcode' => '1234',
            'phone' => '12345678',
        ]);

        $this->assertSessionHas('billingAddress',[
            'title' => 'Mr',
            'first_name' => 'name',
            'last_name' => 'phpunit',
            'street' => 'street',
            'suburb' => 'suburb',
            'state' => 'NSW',
            'country' => 'Australia',
            'postcode' => '1234',
        ]);

        Auth::logout();
    }

    public function test_it_allows_patient_to_create_order()
    {
        Session::start();

        $patient = User::where('email', 'patientemailtest321@gmail.com')->first();
        Auth::login($patient);
        $this->withSession(['basket' => ['1' => '1']]);

        $shippingAddress = $this->createShippingAddress();
        $billingAddress = $this->createBillingAddress();
        $data = array_merge($shippingAddress, $billingAddress, ['_token' => csrf_token()]);
        $this->call('POST', '/shoppingcart/address', $data);
        $this->assertRedirectedTo('/shoppingcart/summary');

        $this->seeInDatabase('orders', [
            'id' => 1001,
            'user_id' => 3,
            'shipping_address_title' => 'Mr',
            'shipping_address_first_name' => 'name',
            'shipping_address_last_name' => 'phpunit',
            'shipping_address_street' => 'street',
            'shipping_address_suburb' => 'suburb',
            'shipping_address_state' => 'NSW',
            'shipping_address_country' => 'Australia',
            'shipping_address_postcode' => '1234',
            'shipping_address_phone' => '12345678',
            'billing_address_title' => 'Mr',
            'billing_address_first_name' => 'name',
            'billing_address_last_name' => 'phpunit',
            'billing_address_street' => 'street',
            'billing_address_suburb' => 'suburb',
            'billing_address_state' => 'NSW',
            'billing_address_country' => 'Australia',
            'billing_address_postcode' => '1234',
            'order_status' => 'New Order',
            'subtotal' => 62.83,
            'GST' => 6.28,
            'shipping_cost' => 11,
            'discount' => 0,
            'grand_total' => 80.11
        ]);

        $this->seeInDatabase('orderedProducts', [
            'id' => 4,
            'order_id' => 1001,
            'product_name' => 'Biotic Jnr.',
            'line_price' => 62.83,
            'line_quantity' => 1,
            'discount_percentage' => 0,
            'discounted_price' => 62.83,
            'line_total' => 62.83,
        ]);

        $this->seeInDatabase('orderedProducts_Promotions', [
            'orderedProduct_id' => 4,
            'promotion_name' => 'Biotic Jnr. Promotion',
            'type' => 'buy_one_get_one_free',
            'promotion_description' => 'Get one free for every three purchase',
            'promotion_apply_to_group' => 'Patient'
        ]);
    }

    public function test_it_allows_practitioner_to_create_order()
    {
        Session::start();

        $practitioner = User::where('email', 'practitioneremailtest321@gmail.com')->first();
        Auth::login($practitioner);
        $this->withSession(['basket' => ['1' => '1']]);

        $shippingAddress = $this->createShippingAddress();
        $billingAddress = $this->createBillingAddress();
        $data = array_merge($shippingAddress, $billingAddress, ['_token' => csrf_token()]);
        $this->call('POST', '/shoppingcart/address', $data);
        $this->assertRedirectedTo('/shoppingcart/summary');

        $this->seeInDatabase('orders', [
            'id' => 1001,
            'user_id' => 2,
            'shipping_address_title' => 'Mr',
            'shipping_address_first_name' => 'name',
            'shipping_address_last_name' => 'phpunit',
            'shipping_address_street' => 'street',
            'shipping_address_suburb' => 'suburb',
            'shipping_address_state' => 'NSW',
            'shipping_address_country' => 'Australia',
            'shipping_address_postcode' => '1234',
            'shipping_address_phone' => '12345678',
            'billing_address_title' => 'Mr',
            'billing_address_first_name' => 'name',
            'billing_address_last_name' => 'phpunit',
            'billing_address_street' => 'street',
            'billing_address_suburb' => 'suburb',
            'billing_address_state' => 'NSW',
            'billing_address_country' => 'Australia',
            'billing_address_postcode' => '1234',
            'order_status' => 'New Order',
            'subtotal' => 38.08,
            'GST' => 3.81,
            'shipping_cost' => 11,
            'discount' => 0,
            'grand_total' => 52.89
        ]);

        $this->seeInDatabase('orderedProducts', [
            'id' => 4,
            'order_id' => 1001,
            'product_name' => 'Biotic Jnr.',
            'line_price' => 38.08,
            'line_quantity' => 1,
            'discount_percentage' => 0,
            'discounted_price' => 38.08,
            'line_total' => 38.08,
        ]);

        $this->dontSeeInDatabase('orderedProducts_Promotions', [
            'orderedProduct_id' => 4,
            'promotion_name' => 'Biotic Jnr. Promotion',
            'type' => 'buy_one_get_one_free',
            'promotion_description' => 'Get one free for every three purchase',
            'promotion_apply_to_group' => 'Patient'
        ]);
    }

    public function test_it_applies_buy_one_get_one_free_promotion()
    {
        Session::start();

        $patient = User::where('email', 'patientemailtest321@gmail.com')->first();
        Auth::login($patient);
        $this->withSession(['basket' => ['1' => '3']]);

        $shippingAddress = $this->createShippingAddress();
        $billingAddress = $this->createBillingAddress();
        $data = array_merge($shippingAddress, $billingAddress, ['_token' => csrf_token()]);
        $this->call('POST', '/shoppingcart/address', $data);
        $this->assertRedirectedTo('/shoppingcart/summary');

        $this->seeInDatabase('orders', [
            'id' => 1001,
            'user_id' => 3,
            'shipping_address_title' => 'Mr',
            'shipping_address_first_name' => 'name',
            'shipping_address_last_name' => 'phpunit',
            'shipping_address_street' => 'street',
            'shipping_address_suburb' => 'suburb',
            'shipping_address_state' => 'NSW',
            'shipping_address_country' => 'Australia',
            'shipping_address_postcode' => '1234',
            'shipping_address_phone' => '12345678',
            'billing_address_title' => 'Mr',
            'billing_address_first_name' => 'name',
            'billing_address_last_name' => 'phpunit',
            'billing_address_street' => 'street',
            'billing_address_suburb' => 'suburb',
            'billing_address_state' => 'NSW',
            'billing_address_country' => 'Australia',
            'billing_address_postcode' => '1234',
            'order_status' => 'New Order',
            'subtotal' => 188.49,
            'GST' => 18.85,
            'shipping_cost' => 0,
            'discount' => 62.83,
            'grand_total' => 207.34
        ]);

        $this->seeInDatabase('orderedProducts', [
            'id' => 4,
            'order_id' => 1001,
            'product_name' => 'Biotic Jnr.',
            'line_price' => 62.83,
            'line_quantity' => 3,
            'discount_percentage' => 0,
            'discounted_price' => 62.83,
            'line_total' => 188.49,
        ]);

        $this->seeInDatabase('orderedProducts', [
            'id' => 5,
            'order_id' => 1001,
            'product_name' => 'Free - Biotic Jnr.',
            'line_price' => 62.83,
            'line_quantity' => 1,
            'discount_percentage' => 100,
            'discounted_price' => 0,
            'line_total' => 0,
        ]);

        $this->seeInDatabase('orderedProducts_Promotions', [
            'orderedProduct_id' => 4,
            'promotion_name' => 'Biotic Jnr. Promotion',
            'type' => 'buy_one_get_one_free',
            'promotion_description' => 'Get one free for every three purchase',
            'promotion_apply_to_group' => 'Patient'
        ]);

        $this->seeInDatabase('orderedProducts_Promotions', [
            'orderedProduct_id' => 5,
            'promotion_name' => 'Biotic Jnr. Promotion',
            'type' => 'buy_one_get_one_free',
            'promotion_description' => 'Get one free for every three purchase',
            'promotion_apply_to_group' => 'Patient'
        ]);
    }

    public function test_it_applies_discount_promotion()
    {
        Session::start();

        $patient = User::where('email', 'patientemailtest321@gmail.com')->first();
        Auth::login($patient);
        $this->withSession(['basket' => ['2' => '1']]);

        $shippingAddress = $this->createShippingAddress();
        $billingAddress = $this->createBillingAddress();
        $data = array_merge($shippingAddress, $billingAddress, ['_token' => csrf_token()]);
        $this->call('POST', '/shoppingcart/address', $data);
        $this->assertRedirectedTo('/shoppingcart/summary');

        $this->seeInDatabase('orders', [
            'id' => 1001,
            'user_id' => 3,
            'shipping_address_title' => 'Mr',
            'shipping_address_first_name' => 'name',
            'shipping_address_last_name' => 'phpunit',
            'shipping_address_street' => 'street',
            'shipping_address_suburb' => 'suburb',
            'shipping_address_state' => 'NSW',
            'shipping_address_country' => 'Australia',
            'shipping_address_postcode' => '1234',
            'shipping_address_phone' => '12345678',
            'billing_address_title' => 'Mr',
            'billing_address_first_name' => 'name',
            'billing_address_last_name' => 'phpunit',
            'billing_address_street' => 'street',
            'billing_address_suburb' => 'suburb',
            'billing_address_state' => 'NSW',
            'billing_address_country' => 'Australia',
            'billing_address_postcode' => '1234',
            'order_status' => 'New Order',
            'subtotal' => 67.54,
            'GST' => 6.75,
            'shipping_cost' => 11,
            'discount' => 16.89,
            'grand_total' => 85.29
        ]);

        $this->seeInDatabase('orderedProducts', [
            'id' => 4,
            'order_id' => 1001,
            'product_name' => 'Enbiotic 120\'s',
            'line_price' => 84.43,
            'line_quantity' => 1,
            'discount_percentage' => 20,
            'discounted_price' => 67.54,
            'line_total' => 67.54,
        ]);

        $this->seeInDatabase('orderedProducts_Promotions', [
            'orderedProduct_id' => 4,
            'promotion_name' => 'Enbiotic 120\'s Sales',
            'type' => 'price_discount',
            'promotion_description' => '20% off Enbiotic 120',
            'promotion_apply_to_group' => 'Patient'
        ]);
    }

}
