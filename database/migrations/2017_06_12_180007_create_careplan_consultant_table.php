<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareplanConsultantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careplan_consultants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('careplan_id')->unsigned();
            $table->integer('practitioner_id')->unsigned()->nullable();
            $table->string('practitioner_email');
            $table->string('nonce', 32);
            $table->timestamps();

            $table->foreign('careplan_id')->references('id')->on('patient_careplans')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('practitioner_id')->references('id')->on('practitioners')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('careplan_consultants');
    }
}
