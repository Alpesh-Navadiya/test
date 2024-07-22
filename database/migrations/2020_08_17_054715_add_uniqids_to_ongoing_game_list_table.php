<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUniqidsToOngoingGameListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ongoing_game_list', function (Blueprint $table) {
            $table->string('epicid')->nullable();
            $table->string('valorantid')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ongoing_game_list', function (Blueprint $table) {
            //
        });
    }
}
