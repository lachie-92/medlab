<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_user', function (Blueprint $table) {
            $table->integer('product_id')->unsigned()->references('id')->on('products');
            $table->integer('user_id')->unsigned()->references('id')->on('users');
            $table->decimal('price_discounted', 8, 2);
            $table->timestamps();

            $table->primary(['product_id', 'user_id']);
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_user');
    }
}
