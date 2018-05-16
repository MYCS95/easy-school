<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cycle extends Model
{
    /**
     * Un cycle a plusieurs filières.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany App\Filiere
     */
    public function filieres()
    {
        return $this->hasMany('App\Filiere');
    }

    /**
     * Un cycle a plusieurs niveaux.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany App\Niveau
     */
    public function niveaux()
    {
        return $this->hasMany('App\Niveau');
    }
}
