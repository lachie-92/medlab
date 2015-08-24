<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('solve_id')->unique()->nullable();
			$table->string('title');
			$table->string('name');
			$table->string('first_name');
            $table->string('middle_name');
			$table->string('last_name');
			$table->boolean('starred');
			$table->string('relationship');
			$table->string('job_title');
			$table->string('modality');
            $table->string('company_name');
			$table->string('country');
            $table->integer('main_address_id');
            $table->integer('registration_email_id');

            //insert created_at and updated_at to timestamp
            $table->timestamps();
            $table->dateTime('viewed_at');
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
		Schema::drop('customers');
	}

}
