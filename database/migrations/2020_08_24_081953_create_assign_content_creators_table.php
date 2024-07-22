<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignContentCreatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assign_content_creators', function (Blueprint $table) {
            $table->id();
            $table->string('gamername')->unique();
            $table->string('uniqkey')->unique();
            $table->float('code_create_amount');
            $table->integer('code_create_id');
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
        Schema::dropIfExists('assign_content_creators');
    }
}
