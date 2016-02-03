<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerStaffTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer_staff', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('staff_role');
			$table->timestamps();

			$table->integer('staff_id')->unsigned();
			$table->foreign('staff_id')->references('id')->on('staffs')->onDelete('cascade');

			$table->integer('customer_id')->unsigned();
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
		Schema::drop('customer_staff');
	}

}
