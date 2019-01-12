<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInputsInputTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inputs__input_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('input_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['input_id', 'locale']);
            $table->foreign('input_id')->references('id')->on('inputs__inputs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inputs__input_translations', function (Blueprint $table) {
            $table->dropForeign(['input_id']);
        });
        Schema::dropIfExists('inputs__input_translations');
    }
}
