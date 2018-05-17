<?php

use Illuminate\Database\Seeder;

class EtablissementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Suppression des données existantes
        App\Etablissement::truncate();

        factory(App\Etablissement::class, 1)->create();
    }
}
