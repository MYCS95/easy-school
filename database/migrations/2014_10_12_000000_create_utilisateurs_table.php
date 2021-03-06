<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            // Les colonnes
            $table->increments('id');
            $table->unsignedInteger('compte_id');
            $table->unsignedInteger('service_id');
            $table->string('nom');
            $table->string('prenoms');
            $table->string('email')->unique();
            $table->string('telephone')->unique();
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
        Schema::dropIfExists('utilisateurs');
    }
}
