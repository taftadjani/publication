<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaboratoiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratoires', function (Blueprint $table) {
            $table->id();
            $table->foreignId('etablissement_id')->constrained()->after('id');
            $table->unsignedBigInteger('directeur_labo');
            $table->foreign('directeur_labo')->references('id')->on('auteurs');
            $table->string('nom_laboratoire');
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
        Schema::dropIfExists('laboratoires');
    }
}
