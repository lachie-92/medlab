<?php

class TestCase extends Illuminate\Foundation\Testing\TestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }

    public function setUp()
    {
        parent::setUp();

        Artisan::call('migrate:rollback');
        Artisan::call('migrate');
        Artisan::call('db:seed');
    }

    protected function createShippingAddress()
    {
        return [
            'shipping_title' => 'Mr',
            'shipping_first_name' => 'name',
            'shipping_last_name' => 'phpunit',
            'shipping_street_address_one' => 'street',
            'shipping_street_address_two' => 'suburb',
            'shipping_city' => 'city',
            'shipping_state' => 'NSW',
            'shipping_country' => 'Australia',
            'shipping_postcode' => '1234',
            'shipping_phone' => '12345678'
        ];
    }

    protected function createBillingAddress()
    {
        return [
            'billing_title' => 'Mr',
            'billing_first_name' => 'name',
            'billing_last_name' => 'phpunit',
            'billing_street_address_one' => 'street',
            'billing_street_address_two' => 'suburb',
            'billing_city' => 'city',
            'billing_state' => 'NSW',
            'billing_country' => 'Australia',
            'billing_postcode' => '1234',
        ];
    }
}
