<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePriceDiscountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_discount', function(Blueprint $table) {

            $table->increments('id');
            $table->integer('promotion_id')->unsigned()->unique();
            $table->foreign('promotion_id')->references('id')->on('promotions')->onDelete('cascade');

            $table->double('minimum_subtotal');
            $table->double('discount_percentage');

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
        Schema::drop('price_discount');
    }
}
