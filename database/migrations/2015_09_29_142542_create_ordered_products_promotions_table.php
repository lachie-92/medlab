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
        Schema::create('ordered_products_promotions', function(Blueprint $table) {

            $table->increments('id');
            $table->foreign('ordered_product_id')->references('id')->on('ordered_products');
            $table->foreign('promotion_id')->references('id')->on('promotions');

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
        Schema::drop('ordered_products_promotions');
    }
}
