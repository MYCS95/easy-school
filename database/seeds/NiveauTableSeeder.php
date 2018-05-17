<?php

use Illuminate\Database\Seeder;

class NiveauTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Niveau::truncate();

        // On sélectionne aléatoirement tous les cycles
        $cycles = App\Cycle::inRandomOrder()->get();

        // Pour chaque cycle on crée 6 niveaux
        foreach ($cycles as $cycle)
        {
            factory(App\Niveau::class, 6)->create([
                'cycle_id' => $cycle->id
            ]);
        }


        // On choisi un cycle au harsard
        $cycle = App\Cycle::find(1);

        $niveaux = $cycle->niveaux()->inRandomOrder()->take(3)->get();
        $series = App\Serie::inRandomOrder()->take(3)->get();

        // On associe les séries aux niveaux de ce cyle
        foreach ($niveaux as $index)
        {
            $niveau = $niveaux->pop();
            $serie = $series->pop();

            App\Niveau_Serie::create([
                'niveau_id' => $niveau->id,
                'serie_id' => $serie->id
            ]);

        }
    }
}
