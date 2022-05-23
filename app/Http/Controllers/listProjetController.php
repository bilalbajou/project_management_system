<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\projet;
use Illuminate\Http\Request;

class listProjetController extends Controller
{
   public function index(){
        $projets=projet::all();
        return view('chef_projet.Listeprojet',compact('projets'));
    }
    public function edit($id)
    {
        $projet = projet::where('id_projet',$id)->first();
       
        return view('chef_projet.update.EditProjet',compact('projet'));
              
    }

  
    public function update(Request $request, $id)
    {
        //        'nomProjet' => ['required'],
        //     'dateDebut' => ['bail','required','Date','before:dateFin'],
        //     'dateFin'=>['bail','required','Date'],
        //     'descr'=>['max:255']
        // ],
        // [
        //     'nomProjet.required' => 'Vous devez saisir le nom du projet',
        //     'dateDebut.required' => 'Vous devez saisir la date de début',
        //     'dateFin.required' => 'Vous devez saisir le date de fin',
        //     'dateDebut.before' => 'La date de début doit être avant la date de fin.',
        //     'descr.max'=>'ne dépasse 255 caractère'
        // ]);
        // $projet = projet::where('id_projet',$id)->first();$validatedData = $request->validate([
     
       
    }

   
    public function destroy($id)
    {
        $projet = projet::where('id_projet', $id)->delete();
        return back();
    }
    public function more(){
           return view("chef_projet.projetPlus");
    }
}
    

