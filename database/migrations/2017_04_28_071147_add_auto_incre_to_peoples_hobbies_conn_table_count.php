<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAutoIncreToPeoplesHobbiesConnTableCount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('LOL_peoples_hobbies_connections', function (Blueprint $table)
        {


            $table->integer('count', true)->change();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('LOL_peoples_hobbies_connections', function (Blueprint $table) {

            $table->integer('count')->change();


        });
    }
}
