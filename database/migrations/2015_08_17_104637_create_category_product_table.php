<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_product', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();

            $table->integer('idProduct')->unsigned();
            $table->foreign('idProduct')->references('idProduct')->on('products')->onDelete('cascade');

            $table->integer('idCategory')->unsigned();
            $table->foreign('idCategory')->references('idCategory')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('category_product');
    }
}
