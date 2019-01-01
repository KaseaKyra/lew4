<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrammarGrammarTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grammar__grammar_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('grammar_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['grammar_id', 'locale']);
            $table->foreign('grammar_id')->references('id')->on('grammar__grammars')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('grammar__grammar_translations', function (Blueprint $table) {
            $table->dropForeign(['grammar_id']);
        });
        Schema::dropIfExists('grammar__grammar_translations');
    }
}
