<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarePlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_careplans', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')->unsigned();
            $table->timestamp('locked_at')->nullable();
            $table->timestamps();

            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
        });

        Schema::create('patient_careplan_attributes', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('careplan_id')->unsigned();
            $table->string('key');
            $table->longtext('value');
            $table->timestamps();

            $table->foreign('careplan_id')->references('id')->on('patient_careplans')->onDelete('cascade');
            $table->unique(['careplan_id', 'key']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('patient_careplan_attributes');
        Schema::drop('patient_careplans');
    }
}
