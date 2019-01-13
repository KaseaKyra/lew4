<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderingsOrderingTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderings__ordering_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('ordering_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['ordering_id', 'locale']);
            $table->foreign('ordering_id')->references('id')->on('orderings__orderings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orderings__ordering_translations', function (Blueprint $table) {
            $table->dropForeign(['ordering_id']);
        });
        Schema::dropIfExists('orderings__ordering_translations');
    }
}
