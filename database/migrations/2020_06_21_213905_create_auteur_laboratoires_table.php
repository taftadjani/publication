<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuteurLaboratoiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auteur_laboratoires', function (Blueprint $table) {
            $table->foreignId('auteur_id')->constrained();
            $table->foreignId('laboratoire_id')->constrained();
            $table->primary(['auteur_id','laboratoire_id'], $name ='id');
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
        Schema::dropIfExists('auteur_laboratoires');
    }
}
