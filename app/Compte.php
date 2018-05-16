<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
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
        return $this->belongsTo('App\Utilisateur');
    }
}
