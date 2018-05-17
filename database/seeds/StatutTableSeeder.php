<?php

use Illuminate\Database\Seeder;

class StatutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //TODO: implémenter le seed de la table Statut
        App\Statut::truncate();

        factory(App\Statut::class, 3)->create();
    }
}
