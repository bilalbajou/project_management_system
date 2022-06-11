<?php

namespace App\Http\Controllers;

use App\Models\tache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class col_listetachecontrolleur extends Controller
{
    public function index()
    {
        $tache=DB::table('view_tache')->where('collaborateur',Auth::user()->id)->get();
        return  view('collaborateur.listetache',compact('tache')) ;
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
     $tache->save();
    return  redirect()->route('col_listetache.index')->with('success','Modification de l\'état de la tache est réussi');
   }
   


}
