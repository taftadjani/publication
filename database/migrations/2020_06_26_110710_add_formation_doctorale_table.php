<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFormationDoctoraleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formation_doctorale', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->foreignId('etablissement_id')->constrained();
            $table->unsignedBigInteger('responsable');
            $table->foreign('responsable')->references('id')->on('auteurs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formation_doctorale');
    }
}
