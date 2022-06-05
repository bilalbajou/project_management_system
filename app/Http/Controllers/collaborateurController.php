<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\infoCollab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class collaborateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=DB::table('user')->where('invited_by',Auth::user()->id)->get();
        return view('chef_projet.listeCollab',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('chef_projet.addCollaborateur');
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
            'nom' => ['required'],
            'prenom' => ['required'],
            'email'=>['bail','required','email','unique:users'],
            'pass'=>['required']
        ],
        [
            'nom.required' => 'Vous devez saisir le nom du collaborateur',
            'prenom.required' => 'Vous devez saisir le prénom du collaborateur',
            'email.required' => 'Vous devez saisir email du collaborateur',
            'email.email'=>'e-mail non valide',
            'email.unique'=>'e-mail déjà existe',
            'pass.required'=>'Vous de devez saisir un mot de passe'
        ]
        
         
    );
   $chef=Auth::user();
   $user= new User();
   $user->name=$request->nom.' '. $request->prenom ;
   $user->email=$request['email'];
   $pass=$request['pass'];
   $user->password=Hash::make($request['pass']);
    $user->user_type='Collaborateur';
    $user->invited_by=Auth::user()->id;
    $user->save();
    Mail::to($user->email)->send(new infoCollab($user,$pass,$chef));
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
        $collaborateur = user::where('id',$id)->first();
        return view('chef_projet.infocollaborateur');
 
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
        $collaborateur = user::where('id',$id)->first();
        return view('chef_projet.infocollaborateur');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('users')->where('id',$id)->delete();
        return redirect()->back()->with('success','La suppression est réussi');
    }
    
}
