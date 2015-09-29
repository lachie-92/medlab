<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderedProductsPromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderedProducts_promotions', function(Blueprint $table) {

            $table->increments('id');
            $table->integer('orderedProduct_id')->unsigned()->unique();
            $table->foreign('orderedProduct_id')->references('id')->on('orderedProducts')->onDelete('cascade');
            $table->integer('promotion_id')->unsigned()->unique();
            $table->foreign('promotion_id')->references('id')->on('promotions')->onDelete('cascade');

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
        Schema::drop('orderedProducts_promotions');
    }
}
