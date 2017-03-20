<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_histories', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')->unsigned();
            $table->timestamp('locked_at')->nullable();
            $table->timestamps();

            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
        });

        Schema::create('patient_history_attributes', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('history_id')->unsigned();
            $table->string('key');
            $table->longtext('value');
            $table->timestamps();

            $table->foreign('history_id')->references('id')->on('patient_histories')->onDelete('cascade');
            $table->unique(['history_id', 'key']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('patient_history_attributes');
        Schema::drop('patient_histories');
    }
}
