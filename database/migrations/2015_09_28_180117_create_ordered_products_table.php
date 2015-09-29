<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderedProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordered_products', function (Blueprint $table) {

            $table->increments('id');
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('product_id')->reference('id')->on('products');

            $table->integer('quantity');
            $table->double('discount_percentage');
            $table->double('line_total');

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
        Schema::drop('ordered_products');
    }
}
