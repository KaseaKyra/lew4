<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsalphabetTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs__alphabet_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('alphabet_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['alphabet_id', 'locale']);
            $table->foreign('alphabet_id')->references('id')->on('songs__alphabets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('songs__alphabet_translations', function (Blueprint $table) {
            $table->dropForeign(['alphabet_id']);
        });
        Schema::dropIfExists('songs__alphabet_translations');
    }
}
