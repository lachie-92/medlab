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

        $new_order = Order::create([
            'user_id' => $user->id,
            'shipping_address_title' => 'Test',
            'shipping_address_last_name' => 'Codeception',
            'shipping_address_street' => 'street',
            'shipping_address_suburb' => 'suburb',
            'shipping_address_state' => 'street',
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
            'subtotal' => 323.57,
            'GST' => 32.36,
            'shipping_cost' => 11,
            'discount' => 96.61,
            'grand_total' => 366.93,
            'purchase_date' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        $biotic_jnr_line = OrderedProduct::create([
            'order_id' => $new_order->id,
            'product_name' => 'Biotic Jnr.',
            'line_price' => 62.83,
            'line_quantity' => 3,
            'discount_percentage' => 0,
            'discounted_price' => 62.83,
            'line_total' => 188.49,
        ]);

        $free_biotic_jnr_line = OrderedProduct::create([
            'order_id' => $new_order->id,
            'product_name' => 'FREE - Biotic Jnr.',
            'line_price' => 62.83,
            'line_quantity' => 1,
            'discount_percentage' => 100,
            'discounted_price' => 0,
            'line_total' => 0,
        ]);

        $enbiotic_line = OrderedProduct::create([
            'order_id' => $new_order->id,
            'product_name' => 'Enbiotic 120\'s',
            'line_price' => 84.43,
            'line_quantity' => 2,
            'discount_percentage' => 20,
            'discounted_price' => 67.54,
            'line_total' => 135.08,
        ]);

        OrderedProducts_Promotion::create([
            'orderedProduct_id' => $biotic_jnr_line->id,
            'promotion_name' => 'Biotic Jnr. Promotion',
            'type' => 'buy_one_get_one_free',
            'promotion_description' => 'Get one free for every three purchase',
            'promotion_apply_to_group' => 'Patient'
        ]);

        OrderedProducts_Promotion::create([
            'orderedProduct_id' => $free_biotic_jnr_line->id,
            'promotion_name' => 'Biotic Jnr. Promotion',
            'type' => 'buy_one_get_one_free',
            'promotion_description' => 'Get one free for every three purchase',
            'promotion_apply_to_group' => 'Patient'
        ]);

        OrderedProducts_Promotion::create([
            'orderedProduct_id' => $enbiotic_line->id,
            'promotion_name' => 'Enbiotic 120\'s Sales',
            'type' => 'price_discount',
            'promotion_description' => '20% off Enbiotic 120',
            'promotion_apply_to_group' => 'Patient'
        ]);
    }
}
