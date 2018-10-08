<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderedProductsPromotions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderedProducts_Promotions', function(Blueprint $table) {

            $table->increments('id');
            $table->integer('orderedProduct_id')->unsigned();
            $table->foreign('orderedProduct_id')->references('id')->on('orderedProducts')->onDelete('cascade');

            $table->string('promotion_name');
            $table->string('type');
            $table->string('promotion_description');
            $table->string('promotion_apply_to_group');

            $table->timestamp('promotion_starting_date');
            $table->timestamp('promotion_end_date');
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
        Schema::drop('orderedProducts_Promotions');
    }
}
