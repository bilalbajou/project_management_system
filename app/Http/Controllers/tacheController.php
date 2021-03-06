<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\tache;
use App\Models\projet;
use App\Mail\tacheMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use SebastianBergmann\Diff\Diff;

class tacheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i=0;
        $taches=DB::table('view_tache')->where('Chef_projet',Auth::user()->id)->get();
        return view('chef_projet.listeTache',compact('taches'))->with('i',$i);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projets=DB::table('projets')->where('Chef_projet',Auth::user()->id)->get();
        $collab=DB::table('users')->where('invited_by',Auth::user()->id)->get();
        return view('chef_projet.addtache',compact('projets'),compact('collab'));
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
            'nomTache' => ['bail','required','string'],
            'dateDebut' => ['bail','required','Date'],
            'dureeTache'=>['bail','required','integer','min:1'],
            'projet'=>['required'],
            'collab'=>['required'],
            'descr'=>['max:255']
        ],
        [
            'nomTache.required' => 'Vous devez saisir le nom du Tâche',
            'dateDebut.required' => 'Vous devez saisir la date de début du Tâche',
            'projet.required' => 'vous devez choisir un projet',
            'dureeTache.required'=>'Vous devez saisir la durée du Tâche',
            'dureeTache.integer'=>'La durée doit être un nombre entier',
            'dureeTache.min'=>'le champs durée n\'accepte pas un nombre null ou négatif',
            'descr.max'=>'ne dépasse 255 caractère'
        ]
         
        );
                $id_projet=$request->get('projet');
                $id_collab=$request->get('collab');
                $tache=new tache();
                $tache->nom_tache=$request->input('nomTache');
                $tache->date_début=$request->input('dateDebut');
                $tache->durée=$request->input('dureeTache');
                $tache->projet=$id_projet;
                $tache->collaborateur=$id_collab;
                $tache->description_tache=$request->input('descr');
                $projet=DB::table('view_projet')->where('id_projet',$tache->projet)->first();
                $date_début_projet=$projet->Date_début;
                $date_début_tache=$tache->date_début;
                if($date_début_tache<$date_début_projet){
                    return redirect()->route('taches.create')->withErrors('date de début de tache inférieure à de date début du projet !');
                } 
                $duree_tache_cumul=DB::table('taches')->where('projet',$tache->projet)->sum('durée')+$tache->durée;
                if($duree_tache_cumul>$projet->durée){
                return redirect()->route('taches.create')->withErrors('Durée du tache est incorrect');
                }
                if($date_début_tache>$projet->Date_fin){
                    return redirect()->route('taches.create')->withErrors('date de début de tache supérieur à de date fin du projet !');
                }
                
                $tache->save();
                $collab=DB::table('users')->where('id',$tache->collaborateur)->first();
                $projet=DB::table('projets')->where('id_projet',$tache->projet)->first();
                Mail::to($collab->email)->send(new tacheMail($tache,$projet));
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
        return  view('chef_projet.plus',compact('projet')) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $collab=DB::table('users')->where('invited_by',Auth::user()->id)->get();
        $projets=DB::table('projets')->where('Chef_projet',Auth::user()->id)->get();
        $tache = tache::where('id_tache',$id)->first();
        return view('chef_projet.update.infotache',['tache'=>$tache,'collab'=>$collab,'projets'=>$projets]);
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
        $validatedData = $request->validate([
            'nomTache' => ['bail','required','string'],
            'dateDebut' => ['bail','required','Date'],
            'dureeTache'=>['bail','required','integer','min:1'],
            'projet'=>['required'],
            'collab'=>['required'],
            'descr'=>['max:255']
        ],
        [
            'nomTache.required' => 'Vous devez saisir le nom du Tâche',
            'dateDebut.required' => 'Vous devez saisir la date de début du Tâche',
            'projet.required' => 'vous devez choisir un projet',
            'dureeTache.required'=>'Vous devez saisir la durée du Tâche',
            'dureeTache.integer'=>'La durée doit être un nombre entier',
            'dureeTache.min'=>'le champs durée n\'accepte pas un nombre null ou négatif',
            'descr.max'=>'ne dépasse 255 caractère'
        ]
         
        );
                $tache=tache::find($id);
                $id_projet=$request->get('projet');
                $id_collab=$request->get('collab');
                $tache->nom_tache=$request->input('nomTache');
                $tache->date_début=$request->input('dateDebut');
                $tache->durée=$request->input('dureeTache');
                $tache->projet=$id_projet;
                $tache->collaborateur=$id_collab;
                $tache->description_tache=$request->input('descr');
                $projet=DB::table('view_projet')->where('id_projet',$tache->projet)->first();
                $date_début_projet=$projet->Date_début;
                $date_début_tache=$tache->date_début;
                if($date_début_tache<$date_début_projet){
                    return redirect()->route('taches.create')->withErrors('date de début de tache inférieure à de date début du projet !');
                }
                if($date_début_tache>$projet->Date_fin){
                    return redirect()->route('taches.create')->withErrors('date de début de tache supérieur à de date fin du projet !');
                }
                $duree_tache_cumul=DB::table('taches')->where('projet',$tache->projet)->sum('durée')+$tache->durée;
                if($duree_tache_cumul>$projet->durée){
                    return redirect()->route('taches.create')->withErrors('Durée du tache est incorrect');
                    }
                $tache->save();
                $collab=DB::table('users')->where('id',$tache->collaborateur)->first();
                $projet=DB::table('projets')->where('id_projet',$tache->projet)->first();
                Mail::to($collab->email)->send(new tacheMail($tache,$projet));
                return  redirect()->back()->with('success','Le sauvegarde est réussi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          DB::table('taches')->where('id_tache',$id)->delete();
          return redirect()->back()->with('success','La suppression est réussi');
    }
   
}

