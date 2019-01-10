<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswerAnswerTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer__answer_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('answer_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['answer_id', 'locale']);
            $table->foreign('answer_id')->references('id')->on('answer__answers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('answer__answer_translations', function (Blueprint $table) {
            $table->dropForeign(['answer_id']);
        });
        Schema::dropIfExists('answer__answer_translations');
    }
}
