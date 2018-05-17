<?php

use Illuminate\Database\Seeder;

class EcheanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Echeance::truncate();

        $scolarites = App\Scolarite::all();

        foreach ($scolarites as $scolarite)
        {
            factory(App\Echeance::class, 6)->create([
                'scolarite_id' => $scolarite->id
            ]);
        }
    }
}
