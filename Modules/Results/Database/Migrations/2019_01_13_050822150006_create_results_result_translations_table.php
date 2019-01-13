<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsResultTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results__result_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('result_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['result_id', 'locale']);
            $table->foreign('result_id')->references('id')->on('results__results')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('results__result_translations', function (Blueprint $table) {
            $table->dropForeign(['result_id']);
        });
        Schema::dropIfExists('results__result_translations');
    }
}
