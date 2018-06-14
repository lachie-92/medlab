<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyNotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_notes', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('author');
			$table->string('content', 5000);
			$table->boolean('is_important');
			$table->timestamps();
			$table->softDeletes();

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
		Schema::drop('company_notes');
	}

}
