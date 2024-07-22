<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompletedGamesListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('completed_games_list', function (Blueprint $table) {
            $table->id();
            $table->string('gamername');
            $table->string('gamemode');
            $table->string('vs_type');
            $table->string('server');
            $table->float('amount');
            $table->string('console');
            $table->string('game_key');
            $table->integer('confirmation');
            $table->integer('confirmation_game_enter');
            $table->string('score');
            $table->integer('score_confirm');
            $table->integer('dispute');
            $table->string('dispute_time');
            $table->string('dispute_image');
            $table->integer('game_over');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('completed__games__lists');
    }
}
