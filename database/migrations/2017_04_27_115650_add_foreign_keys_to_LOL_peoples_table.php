<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLOLPeoplesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('LOL_peoples', function(Blueprint $table)
		{
			$table->foreign('cities_id', 'fk_LOL_peoples_LOL_cities1')->references('id')->on('LOL_cities')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('LOL_peoples', function(Blueprint $table)
		{
			$table->dropForeign('fk_LOL_peoples_LOL_cities1');
		});
	}

}
