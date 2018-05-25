@extends('layouts.app')

@section('content')

<div class="container">
    <div class="center-align">
        <h1 class="red-text text-darken-4 flow-text" style="font-size:xx-large;">EASY SCHOOL</h1>
        <p class="flow-text">{{ __("La 1ère plateforme de gestion de la scolarité et des inscriptions des établissements privés de Côte d'Ivoire") }}</p>
    </div>
    <login-component></login-component>
</div>

@endsection
