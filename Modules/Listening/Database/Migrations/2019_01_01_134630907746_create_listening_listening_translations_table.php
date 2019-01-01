<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListeningListeningTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listening__listening_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('listening_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['listening_id', 'locale']);
            $table->foreign('listening_id')->references('id')->on('listening__listenings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('listening__listening_translations', function (Blueprint $table) {
            $table->dropForeign(['listening_id']);
        });
        Schema::dropIfExists('listening__listening_translations');
    }
}
