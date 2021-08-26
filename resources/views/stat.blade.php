@extends('layouts.layout')

@section('titrePage')
    Statistiques des sujets
@endsection

@auth

@section('titreItem')
    <h1>Statistiques des sujets :</h1>
@endsection

@section('contenu')
    
    <h5>Nombre de sujets : {{$sujetsCount}}</h5>

    <h2 class="stat_info">Statistiques des années</h2>
    <table class="table table-bordered table-striped stat">
    <thead>
        <th>Année sujet</th>
        <th>Nombre d'occurrences</th>
        <th>Pourcentage</th>
    </thead>
    @foreach($annees as $annee)
    <tr>
        <td>{{ $annee->AnnéeSujet}}</td>
        <td>{{ $annee->sujets()->count() }}</td>
        <td>{{ 100*($annee->sujets()->count())/$sujetsCount }}</td>
    </tr>
    @endforeach
    </table>

    <h2 class="stat_info">Statistiques des filières</h2>
    <table class="table table-bordered table-striped stat">
    <thead>
        <th>Nom de la spécialité</th>
        <th>Nombre d'occurrences</th>
        <th>Pourcentage</th>
    </thead>
    @foreach($filieres as $filiere)
    <tr>
        <td>{{ $filiere->NomSpecialité}}</td>
        <td>{{ $filiere->sujets()->count() }}</td>
        <td>{{ 100*($filiere->sujets()->count())/$sujetsCount }}</td>
    </tr>
    @endforeach
    </table>

    <h2 class="stat_info">Statistiques des régions</h2>
    <table class="table table-bordered table-striped stat">
    <thead>
        <th>Nom de la région</th>
        <th>Nombre d'occurrences</th>
        <th>Pourcentage</th>
    </thead>
    @foreach($regions as $region)
    <tr>
        <td>{{ $region->NomRegion}}</td>
        <td>{{ $region->sujets()->count() }}</td>
        <td>{{ 100*($region->sujets()->count())/$sujetsCount }}</td>
    </tr>
    @endforeach
    </table>

    <h2 class="stat_info">Statistiques des auteurs</h2>
    <table class="table table-bordered table-striped stat">
    <thead>
        <th>Nom de l'auteur</th>
        <th>Nombre d'occurrences</th>
        <th>Pourcentage</th>
    </thead>
    @foreach($auteurs as $auteur)
    <tr>
        <td>{{ $auteur->NomAuteur}}</td>
        <td>{{ $auteur->sujets()->count() }}</td>
        <td>{{ 100*($auteur->sujets()->count())/$sujetsCount }}</td>
    </tr>
    @endforeach
    </table>

    <h2 class="stat_info">Statistiques des sessions</h2>
    <table class="table table-bordered table-striped stat">
    <thead>
        <th>Nom de la session</th>
        <th>Nombre d'occurrences</th>
        <th>Pourcentage</th>
    </thead>
    @foreach($sessions as $session)
    <tr>
        <td>{{ $session->NomSession}}</td>
        <td>{{ $session->sujets()->count() }}</td>
        <td>{{ 100*($session->sujets()->count())/$sujetsCount }}</td>
    </tr>
    @endforeach
    </table>

@endsection

@else
@section('contenu')
<div class="alert alert-danger" role="alert">
  Tu n'est pas connecté !!
</div>
@endsection
@endauth
