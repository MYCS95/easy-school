<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScolaritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scolarites', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('anneescolaire_id');
            $table->integer('filiere_id');
            $table->integer('niveau_id');
            $table->unsignedInteger('montant');
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
        Schema::dropIfExists('scolarites');
    }
}
