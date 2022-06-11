<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\infoCollab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
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
        $user=DB::table('users')->where('invited_by',Auth::user()->id)->get();
        $i=0;
        return view('chef_projet.ListeCollab',compact('user'))->with('i',$i);
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
            'tel'=>['numeric']
        ],
        [
            'nom.required' => 'Vous devez saisir le nom du collaborateur',
            'prenom.required' => 'Vous devez saisir le prénom du collaborateur',
            'email.required' => 'Vous devez saisir email du collaborateur',
            'email.email'=>'e-mail non valide',
            'email.unique'=>'e-mail déjà existe',
            'tel.numeric'=>'Vous devez saisir un nombre'
        ]
        
         
    );
   $chef=Auth::user();
   $user= new User();
   $user->name=$request->nom.' '. $request->prenom ;
   $response=Http :: withHeaders(
    [
        'X-RapidAPI-Host' => 'validect-email-verification-v1.p.rapidapi.com',
        'X-RapidAPI-Key' => '45570ffe6emsh12da69d7e649e7dp1ac122jsn1676e61b9965'
    ]
    )->get('https://validect-email-verification-v1.p.rapidapi.com/v1/verify?email='.$request->input('email'));
    if($response->json()['status']=='invalid'){
        return  redirect()->route('collabs.create')->withErrors('Email n\'est pas réel');
     }
       $all_users=User::all();
       foreach($all_users as $value){
             if($value->email==$request->email)
               return redirect()->route('agents.index')->withErrors('Email existe déjà');break;
       }
   $user->email=$request['email'];
   $user->telephone=$request['tel'];
   $random = str_shuffle('abcdefghjklmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ234567890!$%^&!$%^&');
   $pass = substr($random, 1, 9);
   $user->password=Hash::make($pass);
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
