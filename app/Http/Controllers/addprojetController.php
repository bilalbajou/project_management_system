<?php

namespace App\Http\Controllers;

use App\Models\projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class addprojetController extends Controller
{
    function index(){
          $id_chef=Auth::user()->id;
        return view('chef_projet.addprojet')->with('chef',$id_chef);
    }
    function store(Request $request){
         
        $validatedData = $request->validate([
            'nomProjet' => ['required'],
            'dateDebut' => ['bail','required','Date','before:dateFin'],
            'dateFin'=>['bail','required','Date'],
            'descr'=>['max:255']
        ]);
          $projet=new projet();
          $projet->Nom_projet=$request->input('nomProjet');
          $projet->Date_début=$request->input('dateDebut');
          $projet->Date_fin=$request->input('dateFin');
          $projet->description_projet=$request->input('descr');
          $projet->Chef_projet=Auth::user()->id;
          $projet->save();
          return redirect()->route('listeProjet');
    }
}
