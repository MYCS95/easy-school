<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Compte extends Model implements
        AuthenticatableContract,
        AuthorizableContract,
        CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'login', 'password'
    ];

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Un compte ne peut avoir qu'un seul statut
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo App\Statut
     */
    public function statut()
    {
        return $this->belongsTo('App\Statut');
    }

    /**
     * L'utilisateur associé au compte.
     * Un compte est associé à un seul utilisateur.
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo App\Utilisateur
     */
    public function utilisateur()
    {
        return $this->hasOne('App\Utilisateur');
    }
}
