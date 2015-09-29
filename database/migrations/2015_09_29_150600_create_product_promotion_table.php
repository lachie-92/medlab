<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductPromotionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_promotion', function(Blueprint $table) {

            $table->increments('id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('promotion_id')->references('id')->on('promotions');

            $table->boolean('isActive');

            $table->timestamp('starting_date');
            $table->timestamp('end_date');
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
        Schema::drop('product_promotion');
    }
}
