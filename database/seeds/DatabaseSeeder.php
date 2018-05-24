<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        //disable foreign key check for this connection before running seeders
        $this->setFKCheckOff();

        $this->call([
            EtablissementTableSeeder::class,
            StatutTableSeeder::class,
            ServiceTableSeeder::class,
            CompteTableSeeder::class,
            UtilisateurTableSeeder::class,
            AnneeScolaireTableSeeder::class,
            CycleTableSeeder::class,
            SerieTableSeeder::class,
            NiveauTableSeeder::class,
            FiliereTableSeeder::class,
            ClasseTableSeeder::class,
            InscriptionTableSeeder::class,
            ScolariteTableSeeder::class,
            EcheanceTableSeeder::class
        ]);

        // supposed to only apply to a single connection and reset it's self
        // but I like to explicitly undo what I've done for clarity
        $this->setFKCheckOn();
        Eloquent::reguard();
    }

    private function setFKCheckOff() {
        switch(DB::getDriverName()) {
            case 'mysql':
                DB::statement('SET FOREIGN_KEY_CHECKS=0');
                break;
            case 'sqlite':
                DB::statement('PRAGMA foreign_keys = OFF');
                break;
        }
    }

    private function setFKCheckOn() {
        switch(DB::getDriverName()) {
            case 'mysql':
                DB::statement('SET FOREIGN_KEY_CHECKS=1');
                break;
            case 'sqlite':
                DB::statement('PRAGMA foreign_keys = ON');
                break;
        }
    }
}
