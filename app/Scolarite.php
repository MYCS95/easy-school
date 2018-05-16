<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scolarite extends Model
{
    /**
     * La scolarité à plusieurs échéances
     * @return \Illuminate\Database\Eloquent\Relations\HasMany App\Echeance
     */
    public function echeances()
    {
        return $this->hasMany('App\Echeance');
    }
}
