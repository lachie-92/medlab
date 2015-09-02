<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelatedToTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('related_to', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('this_customer_id')->nullabe();
			$table->integer('this_company_id')->nullabe();
			$table->integer('related_customer_id')->nullabe();
			$table->integer('related_company_id')->nullabe();
			//$table->string('this_name');
			$table->string('relationship'); //Doctor employed by
			//$table->string('related_name');
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
		Schema::drop('related_to');
	}

}
