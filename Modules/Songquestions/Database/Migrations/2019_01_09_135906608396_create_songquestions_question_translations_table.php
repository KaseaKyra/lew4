<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongquestionsQuestionTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songquestions__question_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('question_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['question_id', 'locale']);
            $table->foreign('question_id')->references('id')->on('songquestions__questions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('songquestions__question_translations', function (Blueprint $table) {
            $table->dropForeign(['question_id']);
        });
        Schema::dropIfExists('songquestions__question_translations');
    }
}
