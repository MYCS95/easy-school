<?php

use Illuminate\Database\Seeder;

class ScolariteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Scolarite::truncate();

        // On va créer 5 inscriptions qui dépendent du niveau et de la filiere et de l'année scolaire
        $anneescolaires = App\AnneeScolaire::all();
        $niveaux = App\Niveau::all();

        foreach ($anneescolaires as $anneescolaire)
        {
            foreach ($niveaux as $niveau)
            {
                factory(App\Scolarite::class, 1)->create([
                    'anneescolaire_id' => $anneescolaire->id,
                    'niveau_id' => $niveau->id
                ]);
            }
        }
    }
}
