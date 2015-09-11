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

            $table->integer('practitioner_id')->nullable();
            $table->boolean('practitioner_not_found');
            $table->string('practitioner_name');
            $table->string('practitioner_clinic');
            $table->string('practitioner_city');
            $table->string('practitioner_state');
            $table->string('practitioner_country');
            $table->string('practitioner_postcode');

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
        Schema::drop('patient_registrations');
    }
}
