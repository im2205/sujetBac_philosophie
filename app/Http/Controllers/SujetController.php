<?php

namespace App\Http\Controllers;


use App\Models\Sujet;
use App\Models\Année;
use App\Models\Session;
use App\Models\Auteur;
use App\Models\Filière;
use App\Models\Region;
use Illuminate\Http\Request;

class SujetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sujets = Sujet::all();

        $annees = Année::all();
        $sessions = Session::all();
        $auteurs = Auteur::all();
        $filieres = Filière::all();
        $regions = Region::all();
        return view('index', compact('sujets','annees','sessions','auteurs','filieres','regions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sujet  $sujet
     * @return \Illuminate\Http\Response
     */
    public function show(Sujet $sujet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sujet  $sujet
     * @return \Illuminate\Http\Response
     */
    public function edit(Sujet $sujet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sujet  $sujet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sujet $sujet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sujet  $sujet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sujet $sujet)
    {
        //
    }


    public function search(Request $request)
    {
        $annee = $request->get('annee');
        $filiere = $request->get('filiere');
        $region = $request->get('region');
        $auteur = $request->get('auteur');
        $session = $request->get('session');


        $opAnnee = '=';
        $opFiliere = '=';
        $opRegion = '=';
        $opAuteur = '=';
        $opSession = '=';
        
        if($annee == "Toutes les années"){
            $opAnnee = "<>";
        }
        if($filiere == "Toutes les filières"){
            $opFiliere = "<>";
        }
        if($region == "Toutes les régions"){
            $opRegion = "<>";
        }
        if($auteur == "Tous les auteurs"){
            $opAuteur = "<>";
        }
        if($session == "Toutes les sessions"){
            $opSession = "<>";
        }

        $sujets = Sujet::query()
            ->where('année_id', $opAnnee, $annee)
            ->where('session_id', $opSession, $session)
            ->where('auteur_id', $opAuteur, $auteur)
            ->where('filière_id', $opFiliere, $filiere)
            ->where('region_id', $opRegion, $region)
            ->get();

        $annees = Année::all();
        $sessions = Session::all();
        $auteurs = Auteur::all();
        $filieres = Filière::all();
        $regions = Region::all();
        return view('index', compact('sujets','annees','sessions','auteurs','filieres','regions'));

    }
}
