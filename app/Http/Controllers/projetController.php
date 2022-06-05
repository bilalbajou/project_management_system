<?php

namespace App\Http\Controllers;

use App\Models\projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class projetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets=projet::all()->where('Chef_projet',Auth::user()->id);
        return view('chef_projet.Listeprojet',compact('projets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id_chef=Auth::user()->id;
        return view('chef_projet.addprojet')->with('chef',$id_chef);
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
            'nomProjet' => ['required'],
            'dateDebut' => ['bail','required','Date','before:dateFin'],
            'dateFin'=>['bail','required','Date'],
            'descr'=>['max:255']
        ],
        [
            'nomProjet.required' => 'Vous devez saisir le nom du projet',
            'dateDebut.required' => 'Vous devez saisir la date de début',
            'dateFin.required' => 'Vous devez saisir le date de fin',
            'dateDebut.before' => 'La date de début doit être avant la date de fin.',
            'descr.max'=>'ne dépasse 255 caractère'
        ]
         
    );
        
          $projet=new projet();
          $projet->Nom_projet=$request->input('nomProjet');
          $projet->Date_début=$request->input('dateDebut');
          $projet->Date_fin=$request->input('dateFin');
          $projet->description_projet=$request->input('descr');
          $projet->Chef_projet=Auth::user()->id;
          $projet->save();
          return  redirect()->back()->with('success','Le sauvegarde est réussi');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $projet=DB::table('projet_t_u')->where('id_projet',$id)->get();
        return  view('chef_projet.pluss',compact('projet')) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
     {
        $projet = projet::where('id_projet',$id)->first();
        return view('chef_projet.infoprojet',compact('projet'));
        
              
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
        $projet = projet::where('id_projet',$id)->first();
        return view('chef_projet.infoprojet');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projet = projet::where('id_projet', $id)->delete();
        return redirect()->back()->with('success','La suppression est réussi');
    }
    public function plus(){
            
    }
}
