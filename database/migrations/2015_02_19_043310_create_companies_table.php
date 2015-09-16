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
            $table->string('business_type');
            $table->string('modality');
            $table->string('business_number')->unique();
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
