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
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('user_email');
            $table->string('nonce', 32);
            $table->string('description')->nullable();

            $table->longText('opportunity')->nullable();
            $table->longText('goal')->nullable();
            $table->longText('action')->nullable();
            $table->date('target')->nullable();
            $table->longText('progress')->nullable();
            $table->text('source')->nullable();

            $table->timestamp('locked_at')->nullable();
            $table->timestamps();

            $table->foreign('careplan_id')->references('id')->on('patient_careplans')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
