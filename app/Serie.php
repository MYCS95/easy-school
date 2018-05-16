<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    /**
     * Une série peut avoir plusieurs classes.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany App\Classe
     */
    public function classes()
    {
        return $this->belongsToMany('App\Classe');
    }
}
