<?php

namespace App\Http\Controllers;

use App\Models\tache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class col_listetachecontrolleur extends Controller
{
    public function index()
    {
        $tache=DB::table('taches')->where('coloborateur',Auth::user()->id)->get();
        return  view('collaborateur.listetache',compact('tache')) ;
    }
    public function edit($id)
    {
        $tache=DB::table('taches')->where('id_tache',$id)->first();
        return  view('collaborateur.modif_etat',compact('tache')) ;
       
             
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
        DB::table('taches')->where('id_tache',$id)->update(['etat_tache'=>'terminer']);
        DB::table('taches')->where('id_tache',$id)->update(['date_cloture'=>date("Y-m-d")]);
       return  view('collaborateur.modif_etat') ;
      
            
      

   }
   


}
