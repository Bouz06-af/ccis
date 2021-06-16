<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcceuilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acceuils', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('annexe');
            $table->string('membre');
            $table->string('adherent');
            $table->string('nom_visiteur');
            $table->string('prenom_visiteur');
            $table->string('fonction_visiteur');
            $table->string('profil_visiteur');
            $table->string('email_visiteur');
            $table->string('tel_visiteur');
            $table->string('raison_social');
            $table->string('prestation_demandee');
            $table->string('departement_chargee');
            $table->string('responsable_chargee');

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
        Schema::dropIfExists('acceuils');
    }
}
