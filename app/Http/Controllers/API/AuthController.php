<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Compte;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AuthController extends Controller
{
    /**
     * login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);

        $identifiants = request(['login', 'password']);

        if (!Auth::attempt($identifiants))
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);

        $compte = $request->user();

        $tokenResult = $compte->createToken('Personal Access Token');

        $token =$tokenResult->token;

        if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);

        $token->save();

        return response()->json([
            'accessToken' => $tokenResult->accessToken,
            'tokenType' => 'Bearer',
            'expiresAt' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ]);
    }

    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();

        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    /**
     * Get the authenticated compte
     */
    public function user(Request $request)
    {
        return response()->json($request->user());
    }
}
