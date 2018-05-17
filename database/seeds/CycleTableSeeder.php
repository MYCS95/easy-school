<?php

use Illuminate\Database\Seeder;

class CycleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Cycle::truncate();

        factory(App\Cycle::class, 3)->create();
    }
}
