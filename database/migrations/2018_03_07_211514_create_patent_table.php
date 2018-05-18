<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product');
            $table->string('jurisdiction');
            $table->text('description');
            $table->string('application_number');
            $table->date('filing_date');
            $table->string('status');
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
        Schema::dropIfExists('patents');
    }
}
