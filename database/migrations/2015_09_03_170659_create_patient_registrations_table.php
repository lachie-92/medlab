<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_registrations', function (Blueprint $table) {

            $table->increments('id');
            $table->string('title');
            $table->string('email');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('password');

            $table->string('street');
            $table->string('suburb');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('postcode');
            $table->string('telephone');
            $table->string('mobile_phone');

            $table->string('practitioner_id')->nullable();
            $table->boolean('practitioner_not_found')->nullable();
            $table->string('practitioner_not_found_practitioner_name')->nullable();
            $table->string('practitioner_not_found_clinic')->nullable();
            $table->string('practitioner_not_found_city')->nullable();
            $table->string('practitioner_not_found_state')->nullable();
            $table->string('practitioner_not_found_country')->nullable();
            $table->string('practitioner_not_found_postcode')->nullable();

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
        Schema::drop('patient_registrations');
    }
}
