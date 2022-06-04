<?php

namespace App\Http\Controllers;

use App\Models\projet;
use App\Models\reunion;

use App\Mail\reunionMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class reunionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reunion=DB::table('view_reunion')->where('Chef_projet',Auth::user()->id)->get();
        return view('chef_projet.listeReunion',compact('reunion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projets=projet::all()->where('Chef_projet',Auth::user()->id);
        return view('chef_projet.addReunion',compact('projets'));
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
          $projet=DB::table('projets')->where('id_projet',$reunion->projet)->first();
          $collabs=DB::table('view_collabs')->get();
          if($collabs->count()!=0){
             foreach ($collabs as $value) {
                Mail::to($value->email)->send(new reunionMail($reunion,$projet));
            }
          }
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
        $reunion = reunion::where('id_reunion',$id)->first();
        return view('chef_projet.inforeunion');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('reunions')->where('id_reunion',$id)->delete();
        return redirect()->back()->with('success','La suppression est réussi');
    }
}
