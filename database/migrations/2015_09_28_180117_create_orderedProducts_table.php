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
        Schema::create('orderedProducts', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');

            $table->string('item_code');
            $table->string('product_name');
            $table->string('line_price');
            $table->integer('line_quantity');
            $table->double('discount_percentage');
            $table->double('discounted_price');
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
        Schema::drop('orderedProducts');
    }
}
