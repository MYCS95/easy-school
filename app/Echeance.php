<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Echeance extends Model
{

    /**
     * On définit une échéance pour une scolarité.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo App\Scolarite
     */
    public function scolarite()
    {
        return $this->belongsTo('App\Scolarite');
    }
}
