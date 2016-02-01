<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('action_logs', function(Blueprint $table)
		{
			$table->increments('id');
            $table->dateTime('action_timestamp');
			$table->string('description', 1000);
			$table->time('execution_time');
			$table->string('result');
            $table->softDeletes();

			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

			$table->integer('session_log_id')->unsigned();
			$table->foreign('session_log_id')->references('id')->on('session_logs')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('action_logs');
	}

}
