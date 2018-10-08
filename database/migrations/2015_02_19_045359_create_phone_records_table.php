<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhoneRecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('phone_records', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('call_type');
			$table->time('call_duration');
            $table->string('file_name');
			$table->string('file_path');
            $table->string('description', 1000);
			$table->timestamps();
			$table->softDeletes();

			$table->integer('staff_id')->unsigned();
			$table->foreign('staff_id')->references('id')->on('staffs')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('phone_records');
	}

}
