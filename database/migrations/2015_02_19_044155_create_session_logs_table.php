<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('session_logs', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('session_number');
			$table->string('ip_address');
			$table->boolean('session_active');
            $table->datetime('login_at');
			$table->datetime('logout_at');
			$table->datetime('expire_at');
            $table->softDeletes();

			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('session_logs');
	}

}
