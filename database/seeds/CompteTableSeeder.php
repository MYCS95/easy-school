<?php

use Illuminate\Database\Seeder;

class CompteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Compte::truncate();

        $statuts = App\Statut::orderByRaw("RAND()")->get();

        foreach ($statuts as $statut)
        {
            factory(App\Compte::class, 5)->create([
                'statut_id' => $statut->id,
                'utilisateur_id' => null
            ]);
        }

    }
}
