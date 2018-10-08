<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerEmailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer_emails', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('type');
			$table->string('description', 1000);
			$table->string('email_address');
            $table->boolean('preferred');
			$table->timestamps();
			$table->softDeletes();

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
		Schema::drop('customer_emails');
	}

}
