<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('shipping_address_title');
            $table->string('shipping_address_first_name');
            $table->string('shipping_address_last_name');
            $table->string('shipping_address_street');
            $table->string('shipping_address_suburb');
            $table->string('shipping_address_state');
            $table->string('shipping_address_postcode');
            $table->string('shipping_address_city');
            $table->string('shipping_address_country');
            $table->string('shipping_address_phone');

            $table->string('billing_address_title');
            $table->string('billing_address_first_name');
            $table->string('billing_address_last_name');
            $table->string('billing_address_street');
            $table->string('billing_address_suburb');
            $table->string('billing_address_state');
            $table->string('billing_address_postcode');
            $table->string('billing_address_city');
            $table->string('billing_address_country');

            $table->string('payment_type');
            $table->string('payment_token');

            $table->string('order_status');
            $table->double('subtotal');
            $table->double('GST');
            $table->double('shipping_cost');
            $table->double('discount');
            $table->double('grand_total');

            $table->timestamp('purchase_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
