<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('xero_contact_id')->nullable()->unique();
            $table->string('email')->unique();
            $table->string('group');
            $table->string('password', 60);
            $table->rememberToken();
            $table->tinyInteger('tier')->unsigned();
            $table->boolean('newsletter_subscription');
            $table->dateTime('date_approved');
            $table->string('approved_by');
            $table->string('status');
            $table->boolean('account_credit');
            $table->string('timezone');

            //set customer_since as created_at
            $table->timestamps();
            $table->softDeletes();

            $table->integer('customer_id')->unsigned()->unique();
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
        Schema::drop('users');
    }
}
