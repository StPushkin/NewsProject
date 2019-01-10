<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->increments('id');
            $table->string('article_title',50);
            $table->timestamps();
            $table->timestamp('article_creatingdate')->useCurrent();
            $table->longText('article_text');
            $table->string('article_image',255);
            $table->boolean('article_istop');
            $table->integer('article_category_id')->unsigned()->nullable();
            $table->foreign('article_category_id')->references('id')->on('category');
            $table->integer('article_journalist_id')->unsigned()->nullable();
            $table->foreign('article_journalist_id')->references('id')->on('journalist');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
    }
}
