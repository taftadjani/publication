<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuteurArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auteur_article', function (Blueprint $table) {
            $table->foreignId('auteur_id')->constrained();
            $table->foreignId('article_id')->constrained();
            $table->primary(['auteur_id','article_id'], $name ='id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auteur_article');
    }
}
