<?php

use Illuminate\Database\Seeder;

class UtilisateurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Utilisateur::truncate();

        $statut = App\Statut::orderByRaw("RAND()")->first();
        $compte = App\Compte::create([
            'login' => 'samson.molou',
            'statut_id' => $statut->id,
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'remember_token' => str_random(10),
            'estAdministrateur' => true
        ]);

        $service = App\Service::orderByRaw("RAND()")->first();
        factory(App\Utilisateur::class, 1)->create([
            'compte_id' => $compte->id,
            'service_id' => $service->id,
            'nom' => 'Molou',
            'prenoms' => 'Yao Clair Samson',
            'email' => 'samsonmolou@gmail.com',
            'telephone' => '49631223'
        ]);

        // On récupère la liste des comptes de façon aléatoire afin de les associés aux utilisateurs
        $comptes = App\Compte::orderByRaw("RAND()")->get();

        foreach ($comptes as $index)
        {
            // On selectionne un compte et on le supprime de la liste des comptes
            $compte = $comptes->pop();

            // On selectionne un service
            $service = App\Service::orderByRaw("RAND()")->first();
            factory(App\Utilisateur::class, 1)->create([
               'compte_id' => $compte->id, // On associe l'utilisateur au compte
                'service_id' => $service->id, // On associe l'utilisateur au service
            ]);
        }


    }
}
