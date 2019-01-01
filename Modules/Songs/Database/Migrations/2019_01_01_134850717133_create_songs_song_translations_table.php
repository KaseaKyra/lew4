<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsSongTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs__song_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('song_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['song_id', 'locale']);
            $table->foreign('song_id')->references('id')->on('songs__songs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('songs__song_translations', function (Blueprint $table) {
            $table->dropForeign(['song_id']);
        });
        Schema::dropIfExists('songs__song_translations');
    }
}
