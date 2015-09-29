<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyOneGetOneFreeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_one_get_one_free', function(Blueprint $table) {

            $table->increments('id');
            $table->foreign('promotion_id')->references('id')->on('promotions');

            $table->integer('minimum_qty');
            $table->integer('free_qty');

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
        Schema::drop('buy_one_get_one_free');
    }
}
