<?php

use Illuminate\Database\Seeder;

class FiliereTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Filiere::truncate();

        $cycle = App\Cycle::find(2);

        factory(App\Filiere::class, 10)->create([
            'cycle_id' => $cycle->id
        ]);
    }
}
