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
        $projet = projet::find($id);
        return view('projet.edit')->with('contacts', $projet);
    }

  
    public function update(Request $request, $id)
    {
        $projet = projet::find($id);
        $input = $request->all();
        $projet->update($input);
        return redirect()->back();
    }

   
    public function destroy($id)
    {
        $projet = projet::where('id_projet', $id)->delete();
        return back();
    }
}
    

