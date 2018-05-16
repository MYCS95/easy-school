<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnneeScolaire extends Model
{
    /** Les inscriptions dans une année scolaire dépendent du niveau et de la filière.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany App\Niveau
     */
    public function niveauInscription()
    {
        return $this->belongsToMany('App\Niveau')
            ->using('App\Inscription')
            ->withPivot('montant');
    }

    /**
     * Les inscriptions dans une année scolaire dépendent du niveau et de la filière.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany App\Filiere
     */
    public function filiereInscription()
    {
        return $this->belongsToMany('App\Filiere')
            ->using('App\Inscription')
            ->withPivot('montant');
    }

    /** La scolarité dans une année scolaire dépendent du niveau et de la filière.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany App\Niveau
     */
    public function niveauScolarite()
    {
        return $this->belongsToMany('App\Niveau')
            ->using('App\Scolarite')
            ->withPivot('montant');
    }

    /**
     * La scolarité dans une année scolaire dépendent du niveau et de la filière.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany App\Filiere
     */
    public function filiereScolarite()
    {
        return $this->belongsToMany('App\Filiere')
            ->using('App\Scolarite')
            ->withPivot('montant');
    }
}
