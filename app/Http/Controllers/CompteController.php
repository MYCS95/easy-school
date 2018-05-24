<?php

namespace App\Http\Controllers;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Compte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompteController extends Controller
{
    /**
     * Traite les demandes de connexion
     */
    public function seConnecter(Request $request)
    {
        $identifiants = $request->only('login', 'password');

        if(Auth::attempt($identifiants))
        {
            // Connexion réussie
            return redirect()->intended('home');
        }
    }
}
