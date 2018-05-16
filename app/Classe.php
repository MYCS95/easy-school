<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    /**
     * La filiere de la classe.
     * Une classe peut appartenir à une filiere.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo App\Filiere
     */
    public function filiere()
    {
        return $this->belongsTo('App\Filiere');
    }

    /**
     * Le niveau de la classe.
     * Une classe appartient à un niveau.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo App\Niveau
     */
    public function  niveau()
    {
        return $this->belongsTo('App\Niveau');
    }
}
