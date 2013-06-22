<?php

use Illuminate\Database\Migrations\Migration;

class CreateUserStatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_stats', function($table)
        {
            $table->string('url');
            $table->string('event');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	    Schema::drop('user_stats');
	}

}
