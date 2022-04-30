<?php

namespace App\Http\Controllers;

use App\Models\projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class addprojetController extends Controller
{
    function index(){
        $idChefProjet=Auth::user()->id;
        return view('chef_projet.addprojet');
    }
    function store(Request $request){
         
        $validatedData = $request->validate([
            'nomProjet' => ['required'],
            'dateDebut' => ['bail','required','Date','before:dateFin'],
            'dateFin'=>['bail','required','Date'],
            'descr'=>['max:255']
        ]);
        $idChefProjet=Auth::user()->id;

         projet::create([
            'Nom_projet'=>$request->nomProjet,
            'Date_début'=>$request->dateDebut,
            'Date_fin'=>$request->dateFin,
            'description_projet'=>$request->descr,
            
         ]);
         return view("chef_projet.Listeprojet");
    }
}
