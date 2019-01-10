<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChooseChooseTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choose__choose_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('choose_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['choose_id', 'locale']);
            $table->foreign('choose_id')->references('id')->on('choose__chooses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('choose__choose_translations', function (Blueprint $table) {
            $table->dropForeign(['choose_id']);
        });
        Schema::dropIfExists('choose__choose_translations');
    }
}
