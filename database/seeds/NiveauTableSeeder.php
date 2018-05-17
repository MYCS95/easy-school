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
        $cycles = App\Cycle::orderByRaw("RAND()")->get();

        // Pour chaque cycle on crée 6 niveaux
        foreach ($cycles as $cycle)
        {
            factory(App\Niveau::class, 6)->create([
                'cycle_id' => $cycle->id
            ]);
        }

        // On choisi un cycle aRu harsard
        $cycle = App\Cycle::ran;

        foreach ($cycle->niveaux as $niveau)
        {
            $series = App\Serie::orderByRaw("RAND()")->take(3)->get();
            $niveau->series()->save($series);
        }

    }
}
