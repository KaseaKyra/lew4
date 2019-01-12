<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSortingsSortingTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sortings__sorting_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('sorting_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['sorting_id', 'locale']);
            $table->foreign('sorting_id')->references('id')->on('sortings__sortings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sortings__sorting_translations', function (Blueprint $table) {
            $table->dropForeign(['sorting_id']);
        });
        Schema::dropIfExists('sortings__sorting_translations');
    }
}
