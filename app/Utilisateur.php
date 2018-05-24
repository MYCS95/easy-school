<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{

    /**
     * Le compte de l'utilisateur.
     * Un utilisateur est associé à un seul compte.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne App\Compte
     */
    public function compte()
    {
        return $this->belongsTo('App\Compte');
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
