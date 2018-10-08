<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerCallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_calls', function (Blueprint $table) {

            $table->increments('id');
            $table->string('author');
            $table->string('call_type');
            $table->time('call_duration');
            $table->string('call_recording_link');
            $table->string('description', 1000);
            $table->timestamps();
            $table->softDeletes();

            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customer_calls');
    }
}
