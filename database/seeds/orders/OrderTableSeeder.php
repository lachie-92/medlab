<?php

use App\Order;
use App\OrderedProduct;
use App\OrderedProducts_Promotion;
use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'user_id' => 3,
            'shipping_address_title' => 'Test',
            'shipping_address_last_name' => 'Codeception',
            'shipping_address_street' => 'street',
            'shipping_address_suburb' => 'suburb',
            'shipping_address_state' => 'street',
            'shipping_address_country' => 'AU',
            'shipping_address_postcode' => '1234',
            'shipping_address_city' => 'sydney',
            'shipping_address_phone' => '341414',
            'billing_address_title' => 'Mr',
            'billing_address_first_name' => 'Test',
            'billing_address_last_name' => 'Codeception',
            'billing_address_street' => 'street',
            'billing_address_suburb' => 'suburb',
            'billing_address_state' => 'NSW',
            'billing_address_country' => 'AU',
            'billing_address_postcode' => '1234',
            'billing_address_city' => 'sydney',
            'payment_type' => 'CreditCard',
            'order_status' => 'Order Received',
            'subtotal' => 323.57,
            'GST' => 32.36,
            'shipping_cost' => 11,
            'discount' => 96.61,
            'grand_total' => 366.93
        ]);

        OrderedProduct::create([
            'order_id' => 1000,
            'product_name' => 'Biotic Jnr.',
            'line_price' => 62.83,
            'line_quantity' => 3,
            'discount_percentage' => 0,
            'discounted_price' => 62.83,
            'line_total' => 188.49,
        ]);

        OrderedProduct::create([
            'order_id' => 1000,
            'product_name' => 'FREE - Biotic Jnr.',
            'line_price' => 62.83,
            'line_quantity' => 1,
            'discount_percentage' => 100,
            'discounted_price' => 0,
            'line_total' => 0,
        ]);

        OrderedProduct::create([
            'order_id' => 1000,
            'product_name' => 'Enbiotic 120\'s',
            'line_price' => 84.43,
            'line_quantity' => 2,
            'discount_percentage' => 20,
            'discounted_price' => 67.54,
            'line_total' => 135.08,
        ]);

        OrderedProducts_Promotion::create([
            'orderedProduct_id' => 1,
            'promotion_name' => 'Biotic Jnr. Promotion',
            'type' => 'buy_one_get_one_free',
            'promotion_description' => 'Get one free for every three purchase',
            'promotion_apply_to_group' => 'Patient'
        ]);

        OrderedProducts_Promotion::create([
            'orderedProduct_id' => 2,
            'promotion_name' => 'Biotic Jnr. Promotion',
            'type' => 'buy_one_get_one_free',
            'promotion_description' => 'Get one free for every three purchase',
            'promotion_apply_to_group' => 'Patient'
        ]);

        OrderedProducts_Promotion::create([
            'orderedProduct_id' => 3,
            'promotion_name' => 'Enbiotic 120\'s Sales',
            'type' => 'price_discount',
            'promotion_description' => '20% off Enbiotic 120',
            'promotion_apply_to_group' => 'Patient'
        ]);
    }
}
