<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_tags', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('attach_company_tag', function(Blueprint $table)
		{
			$table->integer('company_tag_id')->unsigned()->index();
			$table->foreign('company_tag_id')->references('id')->on('company_tags')->onDelete('cascade');

			$table->integer('company_id')->unsigned()->index();
			$table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');

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
		Schema::drop('attach_company_tag');
		Schema::drop('company_tags');
	}

}
