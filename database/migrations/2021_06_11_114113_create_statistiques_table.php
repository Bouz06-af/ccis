<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatistiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistiques', function (Blueprint $table) {
            $table->id();
            $table->String('adherent');
            $table->String('Tel');
            $table->integer('besoin');
            $table->integer('document');
            $table->integer('infos');
            $table->integer('acceuil');
            $table->String('annee');
            $table->String('mois');
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
        Schema::dropIfExists('statistiques');
    }
}
