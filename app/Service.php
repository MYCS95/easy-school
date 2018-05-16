<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /**
     * Liste des utilisateurs appartement au service.
     * Un service peut accueillir plusieurs utilisateurs.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany App\Utilisateur
     */
    public function utilisateurs()
    {
        return $this->hasMany('App\Utilisateur');
    }
}
