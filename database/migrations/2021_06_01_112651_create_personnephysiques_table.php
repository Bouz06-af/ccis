<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnephysiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnephysiques', function (Blueprint $table) {
            $table->id();
            $table->string('annexe');
            $table->string('membre');
            $table->string('adherent');
            $table->string('nom');
            $table->string('prenom');
            $table->string('fonction');
            $table->string('profil');
            $table->string('email');
            $table->string('tel');
            $table->string('raison_social');
            $table->string('statut_juridique');
            $table->string('college');
            $table->string('secteur');
            $table->string('activite');
            $table->string('effectif');
            $table->string('ca');
            $table->string('ville');
            $table->string('adresse');
         
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
        Schema::dropIfExists('personnephysiques');
    }
}
