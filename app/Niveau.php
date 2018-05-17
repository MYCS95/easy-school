<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    /**
     * Activer l'assignation multiple.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Le montant de l'inscription au niveau dépend de l'année scolaire.
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
     * Le montant de l'insciption dépend de la filiere.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function  filiereInscription()
    {
        return $this->belongsToMany('App\Filiere')
            ->using('App\Inscription')
            ->withPivot('montant');
    }

    /**
     * Le montant de la scolarite au niveau dépend de l'année scolaire.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany App\AnneeScolaire
     */
    public function anneeScolaireScolarite()
    {
        return $this->belongsToMany('App\AnneeScolaire')
            ->using('App\Inscription')
            ->withPivot('montant');
    }

    /**
     * Le montant de l'insciption dépend de la filiere.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany App\Filiere
     */
    public function  filiereScolarite()
    {
        return $this->belongsToMany('App\Filiere')
            ->using('App\Scolarite')
            ->withPivot('montant');
    }

    /**
     * Un niveau peut avoir plusieurs séries.
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany App\Serie
     */
    public function series()
    {
        return $this->belongsToMany('App\Serie');
    }

    /**
     * un niveau peut avoir plusieurs classes.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany App\Classe
     */
    public function classes()
    {
        return $this->hasMany('App\Classe');
    }

    /**
     * Un niveau appartient à un cycle.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo App\Cycle
     */
    public function cycle()
    {
        return $this->belongsTo(Cycle::class);
    }
}
