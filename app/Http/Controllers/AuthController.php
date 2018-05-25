<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function reset()
    {
        return view('auth.passwords.reset');
    }

    public function logout()
    {
        return view('home');
    }
}
