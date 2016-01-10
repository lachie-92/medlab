<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePractitionerRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practitioner_registrations', function (Blueprint $table) {

            $table->increments('id');
            $table->string('title');
            $table->string('email');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('password');

            $table->string('clinic_name');
            $table->string('business_type');
            $table->string('business_number');
            $table->string('provider_number');
            $table->integer('company_id')->nullable();

            $table->string('street');
            $table->string('suburb');
            $table->string('state');
            $table->string('country');
            $table->string('postcode');
            $table->string('telephone');
            $table->string('mobile_phone');

            $table->timestamp('approval')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('practitioner_registrations');
    }
}
