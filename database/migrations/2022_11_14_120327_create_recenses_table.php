<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recenses', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('postnom');
            $table->string('lieu_de_naissance');
            $table->string('sexe');
            $table->string('nom_mere');
            $table->string('nom_pere');
            $table->string('etat_civil');
            $table->string('pays');
            $table->string('nationalite');
            $table->string('province');
            $table->string('commune');
            $table->string('quartier');
            $table->string('avenue');
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
        Schema::dropIfExists('recenses');
    }
}
