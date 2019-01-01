<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontendFrontendTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend__frontend_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('frontend_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['frontend_id', 'locale']);
            $table->foreign('frontend_id')->references('id')->on('frontend__frontends')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('frontend__frontend_translations', function (Blueprint $table) {
            $table->dropForeign(['frontend_id']);
        });
        Schema::dropIfExists('frontend__frontend_translations');
    }
}
