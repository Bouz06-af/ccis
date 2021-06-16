<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRessortissantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ressortissants', function (Blueprint $table) {
            $table->id();
            $table->string('annexe');
            $table->string('membre');
            $table->string('adherent');
            $table->string('nom_complet');
            $table->string('fonction');
            $table->string('profil');
            $table->string('email');
            $table->string('tel');
            $table->string('ice');
            $table->string('patente');
            $table->string('raison_social');
            $table->string('statut_juridique');
            $table->string('college');
            $table->string('secteur');
            $table->string('effectif');
            $table->string('ca');
            $table->string('pays');
            $table->string('ville');
            $table->string('adresse');
            $table->string('tel_entreprise');
            $table->string('email_entreprise');
            $table->string('nom_complet_dirigeant');
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
        Schema::dropIfExists('ressortissants');
    }
}
