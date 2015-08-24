<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('companies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('solve_id')->unique()->nullable();
			$table->string('name');
            $table->boolean('starred');
            $table->string('practitioner_type');
            $table->string('clinic_speciality');
            $table->string('modality');
            $table->string('registration_number');
            $table->string('registration_type');
            $table->string('country');
            $table->string('main_address_id');
			$table->dateTime('viewed_at');

            //insert created_at and updated_at to timestamp
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
		Schema::drop('companies');
	}

}
