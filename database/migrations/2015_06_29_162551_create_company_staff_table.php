<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_staff', function (Blueprint $table) {
            $table->increments('id');
            $table->string('staff_role');
            $table->softDeletes();
            $table->timestamps();

            $table->integer('staff_id')->unsigned();
            $table->foreign('staff_id')->references('id')->on('staffs')->onDelete('cascade');

            $table->integer('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('company_staff');
    }
}
