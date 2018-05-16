<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Utilisateur extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Le compte de l'utilisateur.
     * Un utilisateur est associé à un seul compte.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne App\Compte
     */
    public function compte()
    {
        return $this->hasOne('App\Compte');
    }

    /**
     * Le service auquel appartient l'utilisateur.
     * Un utilisateur travaille dans un seul service.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo App\Service
     */
    public function service()
    {
        return $this->belongsTo('App\Service');
    }
}
