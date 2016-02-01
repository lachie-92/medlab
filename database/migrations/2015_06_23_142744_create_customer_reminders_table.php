<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerRemindersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_reminders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('author');
            $table->dateTime('scheduled_time');
            $table->string('description', 1000);
            $table->string('attendees', 5000);
            $table->boolean('completed');
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
        Schema::drop('customer_reminders');
    }
}
