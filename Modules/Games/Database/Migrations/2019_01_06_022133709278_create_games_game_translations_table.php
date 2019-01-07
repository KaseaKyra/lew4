<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesGameTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games__game_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('game_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['game_id', 'locale']);
            $table->foreign('game_id')->references('id')->on('games__games')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('games__game_translations', function (Blueprint $table) {
            $table->dropForeign(['game_id']);
        });
        Schema::dropIfExists('games__game_translations');
    }
}
