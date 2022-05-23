<?php

namespace App\Http\Controllers;

use App\Models\projet;
use App\Models\reunion;
use Illuminate\Http\Request;

class reunionController extends Controller
{
      public function create(){
            $projets=projet::all();
            return view('chef_projet.addReunion',compact('projets'));
      }
      public function store( Request $request){
            $validatedData = $request->validate([
                  'sujetReunion' => ['required'],
                  'dateDebut' => ['bail','required','Date'],
                  'projet'=>['required'],
                  'descr'=>['max:255']
              ],
              [
                  'sujetReunion.required' => 'Vous devez saisir le sujet du réunion',
                  'dateDebut.required' => 'Vous devez saisir la date de début du réunion',
                  'projet.required' => 'vous devez choisir un projet',
                  'descr.max'=>'ne dépasse 255 caractère'
              ]
               
          );
                $id_projet=$request->get('projet');
                $reunion=new reunion();
                $reunion->sujet=$request->input('sujetReunion');
                $reunion->date_heure=$request->input('dateDebut');
                $reunion->projet=$id_projet;
                $reunion->description=$request->input('descr');
                $reunion->save();
                
      }
}
