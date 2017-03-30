<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePractitionerProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practitioner_product', function (Blueprint $table) {
            $table->integer('practitioner_id')->unsigned()->references('id')->on('practitioners');
            $table->integer('product_id')->unsigned()->references('id')->on('products');
            $table->decimal('price_discounted', 8, 2);
            $table->timestamps();

            $table->primary(['practitioner_id', 'product_id']);
            $table->foreign('practitioner_id')->references('id')->on('practitioners')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('practitioner_product');
    }
}
