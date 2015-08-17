<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_product', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();

            $table->integer('idProduct')->unsigned();
            $table->foreign('idProduct')->references('idProduct')->on('products')->onDelete('cascade');
            $table->index('idProduct');

            $table->integer('idIngredient')->unsigned();
            $table->foreign('idIngredient')->references('idIngredient')->on('ingredients')->onDelete('cascade');
            $table->index('idIngredient');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ingredient_product');
    }
}
