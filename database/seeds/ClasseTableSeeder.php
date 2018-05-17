<?php

use Illuminate\Database\Seeder;

class ClasseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Classe::truncate();

        $niveaux = App\Niveau::all();

        foreach ($niveaux as $niveau)
        {
            factory(App\Classe::class, 5)->create([
                'niveau_id' => $niveau->id
            ]);
        }

        $classes = App\Classe::inRandomOrder()->take(10)->get();

        foreach ($classes as $classe)
        {
            $filiere = App\Filiere::find(rand(1, 10));

            $classe->filiere_id = $filiere->id;

            $classe->save();
        }
    }
}
