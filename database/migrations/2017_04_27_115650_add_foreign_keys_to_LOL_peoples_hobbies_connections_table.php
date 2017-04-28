<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLOLPeoplesHobbiesConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('LOL_peoples_hobbies_connections', function(Blueprint $table)
		{
			$table->foreign('LOL_hobbies_id', 'fk_LOL_peoples_hobbies_connections_LOL_hobbies1')->references('id')->on('LOL_hobbies')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('LOL_peoples_id', 'fk_LOL_peoples_hobbies_connections_LOL_peoples')->references('id')->on('LOL_peoples')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('LOL_peoples_hobbies_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_LOL_peoples_hobbies_connections_LOL_hobbies1');
			$table->dropForeign('fk_LOL_peoples_hobbies_connections_LOL_peoples');
		});
	}

}
