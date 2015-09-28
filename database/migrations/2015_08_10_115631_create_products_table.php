<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('xero_item_id')->unique();
            $table->string('product_name_index', 255);
            $table->index('product_name_index');
            $table->string('product_name', 255);
            $table->string('short_description', 3000);
            $table->text('patent');
            $table->text('general_summary');
            $table->text('practitioner_summary');
            $table->text('references');
            $table->text('side_effects');
            $table->text('interactions');
            $table->text('dosage_information');
            $table->text('ingredients');
            $table->text('cmi');
            $table->text('free_from');
            $table->decimal('price_retail', 8, 2);
            $table->decimal('price_wholesale', 8, 2);
            $table->string('image_path', 255);
            $table->string('thumb_image_path', 255);
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
        Schema::drop('products');
    }
}
