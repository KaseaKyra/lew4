<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoriesStoryTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stories__story_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('story_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['story_id', 'locale']);
            $table->foreign('story_id')->references('id')->on('stories__stories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stories__story_translations', function (Blueprint $table) {
            $table->dropForeign(['story_id']);
        });
        Schema::dropIfExists('stories__story_translations');
    }
}
