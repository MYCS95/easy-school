<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    /**
     * Le montant de l'inscription à une filiere dépend de l'année scolaire.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany App\AnneeScolaire
     */
    public function anneeScolaireInscription()
    {
        return $this->belongsToMany('App\AnneeScolaire')
            ->using('App\Inscription')
            ->withPivot('montant');
    }

    /**
     * Le montant de l'inscription à une filière dépend du niveau
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany App\Niveau
     */
    public function niveauInscription()
    {
        return $this->belongsToMany('App\Niveau')
            ->using('App\Inscription')
            ->withPivot('montant');
    }

    /**
     * Le montant de la scolaité à une filiere dépend de l'année scolaire.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany App\AnneeScolaire
     */
    public function anneeScolaireScolarite()
    {
        return $this->belongsToMany('App\AnneeScolaire')
            ->using('App\Scolarite')
            ->withPivot('montant');
    }

    /**
     * Le montant de la scolarite à une filière dépend du niveau.
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
     * Les classes de la filiere.
     * Une filiere peut avoir plusieurs classes.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany App\Classe
     */
    public function classes()
    {
        return $this->hasMany('App\Classe');
    }

    /**
     * Une filiere appartient à un cycle.
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo App\Cycle
     */
    public function cycle()
    {
        return $this->belongsTo('App\Cycle');
    }
}
