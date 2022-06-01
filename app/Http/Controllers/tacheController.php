<?php

namespace App\Http\Controllers;

use App\Models\tache;
use App\Models\projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tacheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tache=tache::all();
        return view('chef_projet.listeTache',compact('tache'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projets=projet::all();
        $collab=  DB::table('collab')->get();
        return view('chef_projet.addtache',compact('projets'),compact('collab'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nomTache' => ['bail','required','string'],
            'dateDebut' => ['bail','required','Date'],
            'dureeTache'=>['bail','required','integer','min:1'],
            'projet'=>['required'],
            'collab'=>['required'],
            'descr'=>['max:255']
        ],
        [
            'nomTache.required' => 'Vous devez saisir le nom du Tâche',
            'dateDebut.required' => 'Vous devez saisir la date de début du Tâche',
            'projet.required' => 'vous devez choisir un projet',
            'dureeTache.required'=>'Vous devez saisir la durée du Tâche',
            'dureeTache.integer'=>'La durée doit être un nombre entier',
            'dureeTache.min'=>'le champs durée n\'accepte pas un nombre null ou négatif',
            'descr.max'=>'ne dépasse 255 caractère'
        ]
         
        );
                $id_projet=$request->get('projet');
                $id_collab=$request->get('collab');
                $tache=new tache();
                $tache->nom_tache=$request->input('nomTache');
                $tache->date_début=$request->input('dateDebut');
                $tache->durée=$request->input('dureeTache');
                $tache->projet=$id_projet;
                $tache->collaborateur=$id_collab;
                $tache->description_tache=$request->input('descr');
                $tache->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}