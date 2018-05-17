<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeyMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('utilisateurs', function ($table) {
            // Les clés étrangères
            $table->foreign('compte_id')->references('id')->on('comptes');
            $table->foreign('service_id')->references('id')->on('services');
        });

        Schema::table('comptes', function ($table) {
            // Les clés étrangères
            $table->foreign('statut_id')->references('id')->on('statuts');
        });

        Schema::table('filieres', function($table) {
            // Les clés étrangères
            $table->foreign('cycle_id')->references('id')->on('cycles');
        });

        Schema::table('classes', function($table) {
            // Les clés étrangères
            $table->foreign('niveau_id')->references('id')->on('niveaux');
            $table->foreign('filiere_id')->references('id')->on('filieres');
        });

        Schema::table('niveaux', function($table) {
            // Les clés étrangères
            $table->foreign('cycle_id')->references('id')->on('cycles');
        });

        Schema::table('scolarites', function($table) {
            // Les clés étrangères
            $table->foreign('anneescolaire_id')->references('id')->on('annee_scolaires');
            $table->foreign('filiere_id')->references('id')->on('filieres');
            $table->foreign('niveau_id')->references('id')->on('niveaux');
        });

        Schema::table('echeances', function($table) {
            // Les clés étrangères
            $table->foreign('scolarite_id')->references('id')->on('scolarites');
        });

        Schema::table('inscriptions', function($table) {
            // Les clés étrangères
            $table->foreign('anneescolaire_id')->references('id')->on('annee_scolaires');
            $table->foreign('niveau_id')->references('id')->on('niveaux');
            $table->foreign('filiere_id')->references('id')->on('filieres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
