<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnemoralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnemorals', function (Blueprint $table) {
            $table->id();
            $table->string('denomination');
            $table->string('gerant');
            $table->string('ville');
            $table->string('if');
            $table->string('rc');
            $table->string('ice');
            $table->string('activite');
            $table->string('forme_juridique');
            $table->string('date_creation');
            $table->string('adresse');
            $table->string('email');
            $table->string('tel');
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
        Schema::dropIfExists('personnemorals');
    }
}
