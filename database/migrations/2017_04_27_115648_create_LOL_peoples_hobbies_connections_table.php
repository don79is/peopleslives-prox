<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLOLPeoplesHobbiesConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('LOL_peoples_hobbies_connections', function(Blueprint $table)
		{
			$table->integer('count')->unique('count_UNIQUE');
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->timestamps();
			$table->softDeletes();
			$table->string('LOL_peoples_id', 225)->index('fk_LOL_peoples_hobbies_connections_LOL_peoples_idx');
			$table->string('LOL_hobbies_id', 225)->index('fk_LOL_peoples_hobbies_connections_LOL_hobbies1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('LOL_peoples_hobbies_connections');
	}

}
