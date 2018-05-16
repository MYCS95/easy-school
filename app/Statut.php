<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statut extends Model
{
    /**
     * Plusieurs comptes peuvent avoir le même statut
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany App\Compte
     */
    public function comptes()
    {
        return $this->hasMany('App\Compte');
    }
}
