<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKeyToCompletedGamesListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('send_requests', function (Blueprint $table) {
              $table->string('gameid')->nullable();
            $table->string('gameteam')->nullable();        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('send_requests', function (Blueprint $table) {
            //
        });
    }
}
