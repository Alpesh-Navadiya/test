<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEpicProfileIdToEpicProfileIdOngoingGameListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ongoing_game_list', function (Blueprint $table) {
            $table->string('epic_profile_id')->nullable();
            $table->string('gamer_id')->nullable();
            
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
