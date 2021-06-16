<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuiviclientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suiviclients', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('trimestre');
            $table->string('annexe');
            $table->string('membre');
            $table->string('adherent');
            $table->string('nom_visiteur');
            $table->string('fonction_visiteur');
            $table->string('profil_visiteur');
            $table->string('email_visiteur');
            $table->string('tel_visiteur');
            $table->string('ice');
            $table->string('patente');
            $table->string('raison_social');
            $table->string('statut_juridique');
            $table->string('college');
            $table->string('secteur');
            $table->string('ca');
            $table->string('pays');
            $table->string('ville');
            $table->string('adresse');
            $table->string('tel_entreprise');
            $table->string('email_entreprise');
            $table->string('nom_dirigeant');
            $table->string('responsable');
            $table->string('delai_traitement');
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
        Schema::dropIfExists('suiviclients');
    }
}
