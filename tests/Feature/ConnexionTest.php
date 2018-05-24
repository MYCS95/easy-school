<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ConnexionTest extends TestCase
{
    /**
     * Test si le login et le mot de passe sont requis pour la connexion
     *
     * @return void
     */
    public function testLoginMotDePasseRequis()
    {
        $this->json('POST', 'api/connexion')
            ->assertStatus(422)
            ->assertJson([
                'login' => ['Le champ login est requis.'],
                'password' => ['Le mot de passe est requis.']
            ]);
    }

    /**
     * Test si un utilisateur peut se connecter
     */
    public function testConnexionReussie()
    {
        $compte = factory(Compte::class)->create([
            'login' => 'test.connexion',
            'motdepasse' => bcrypt('secret')
        ]);

        $payload = ['login' => 'test.connexion', 'password' => 'secret'];

        $this->json('POST', 'api/connexion', $payload)
            ->assertStatus(209)
            ->assertJsonStructure([
                'data' => [
                    'id',
                    'utilisateur_id',
                    'statut_id',
                    'login',
                    'password',
                    'estAdministrateur',
                    'remember_token',
                    'created_at',
                    'updated_at',
                    'api_token',
                ],
            ]);
    }
}
