<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerminatedGamesListsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('terminated_games_lists', function (Blueprint $table) {
			$table->id();
			$table->string('gamername')->nullable();
			$table->string('gamer_id')->nullable();
			$table->string('gamemode')->nullable();
			$table->string('vs_type')->nullable();
			$table->string('server')->nullable();
			$table->string('amount')->nullable();
			$table->string('console')->nullable();
			$table->string('game_key')->nullable();
			$table->integer('confirmation')->nullable();
			$table->integer('confirmation_game_enter')->nullable();
			$table->string('score')->nullable();
			$table->integer('score_confirm')->nullable();
			$table->integer('dispute')->nullable();
			$table->string('dispute_time')->nullable();
			$table->string('dispute_image')->nullable();
			$table->integer('game_over')->nullable();
			$table->string('prize')->nullable();
			$table->string('sqard')->nullable();

			$table->string('epic_profile_id')->nullable();
			$table->string('valorantid')->nullable();
			$table->float('epicid')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('terminated_games_lists');
	}
}
