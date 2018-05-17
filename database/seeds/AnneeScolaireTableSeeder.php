<?php

use Illuminate\Database\Seeder;

class AnneeScolaireTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\AnneeScolaire::truncate();

        factory(App\AnneeScolaire::class, 3)->create();
    }
}
