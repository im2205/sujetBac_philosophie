@extends('layouts.layout')

@section('titrePage')
    Home
@endsection


@section('titreItem')
    <h5>HOME</h5>
@endsection

@section('contenu')
<div class="home">
    Vous êtes sur la page d'accueil de sujet-bac-philosophie.com
    Connectez vous pour accedez au contenu !
</div>
<img class = "background" src="{{ URL::to('../public/bac.png') }}">

@endsection

