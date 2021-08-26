@extends('layouts.layout')

@section('titrePage')
    Liste des Sujets
@endsection
@auth


@section('recherche')
    <form class="formulaire" action="{{ url('search')}}" method="POST">
    
            @csrf
            <div class="row">
                <div class="col">
                    <label for="annee">Année : </label>
                    <select class="form-control" name="annee" id="annee">
                        <option>Toutes les années</option>
                        @foreach($annees as $annee)
                        <option>{{ $annee->AnnéeSujet }}</option>
                        @endforeach
                    </select> 
                </div>
                <div class="col">
                    <label for="filiere">Filière : </label>
                    <select class="form-control" name="filiere"  id="filiere">
                        <option>Toutes les filières</option>
                        @foreach($filieres as $filiere)
                        <option>{{ $filiere->NomSpecialité }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="region">Région : </label>
                    <select class="form-control" name="region"  id="region">
                        <option>Toutes les régions</option>
                        @foreach($regions as $region)
                        <option>{{ $region->NomRegion }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

        <div class="row down">
            <div class="col">
                <label for="auteur">Auteur : </label>
                <select class="form-control" name="auteur"  id="auteur">
                    <option>Tous les auteurs</option>
                    @foreach($auteurs as $auteur)
                    <option>{{ $auteur->NomAuteur }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="session">Session : </label>
                <select class="form-control" name="session"  id="session">
                    <option>Toutes les sessions</option>
                    @foreach($sessions as $session)
                    <option>{{ $session->NomSession }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mb-2 find">Rechercher</button>
    </form>
@endsection
@section('contenu')

    <h3 class="result">Sujets ({{ $sujets->count()}})</h3>
    <table class="table table-bordered table-striped recherche">
        <thead>
            <th>Id</th>
            <th>Année sujet</th>
            <th>Nom specialité</th>
            <th>Nom region </th>
            <th>Nom session</th>
            <th>Type</th>
            <th>Thèmes</th>
            <th>Nom Sujet</th>
            <th>Nom Auteur</th>

        </thead>
        @foreach($sujets as $sujet)
        <tr>
            <td>{{ $sujet->id }}</td>
            <td>{{ $sujet->annee->AnnéeSujet }}</td>
            <td>{{ $sujet->filiere->NomSpecialité }}</td>
            <td>{{ $sujet->region->NomRegion }}</td>
            <td>{{ $sujet->session->NomSession }}</td>
            <td>{{ $sujet->type->Nom }}</td>
            <td>
            @foreach($sujet->themes as $theme)
                {{ $theme->pivot->thème_id }}
            @endforeach
            </td>
            <td>{{ $sujet->nomSujet }}</td>
            <td>{{ $sujet->auteur->NomAuteur }}</td>
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
