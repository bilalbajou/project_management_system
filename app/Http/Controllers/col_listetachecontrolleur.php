<?php

namespace App\Http\Controllers;

use App\Models\tache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\projet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class col_listetachecontrolleur extends Controller
{
    public function index()
    {
        $i=0;
        $tache=DB::table('view_tache')->where('collaborateur',Auth::user()->id)->get();
        return  view('collaborateur.listetache',compact('tache'),compact('i'));
    }
    public function edit($id)
    {
           
       }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update($id)
   {
     $tache=tache::find($id);
     $tache->état_tache="Terminée";
     $tache->complete_date=date("Y-m-d");
     $taches=DB::table('taches')->where('projet',$tache->projet)->get();
     $tache->save();
     $taches_complete=DB::table('taches')->where('projet',$tache->projet)->where('état_tache','Terminée');
     if($tache->count()==$taches_complete->count()){
        $projet=projet::find($tache->projet);
        $projet->etat_projet="Terminée";
        $projet->complete_date=date("Y-m-d");
        $projet->save();
     }
    return  redirect()->route('col_listetache.index')->with('success','Modification de l\'état de la tache est réussi');
   }
   


}
