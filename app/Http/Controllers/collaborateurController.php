<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class collaborateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=user::all();
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
            'email'=>['required','email'],
            'pass'=>['required']
        ],
        [
            'nom.required' => 'Vous devez saisir le nom du collaborateur',
            'prenom.required' => 'Vous devez saisir le prénom du collaborateur',
            'email.required' => 'Vous devez saisir email du collaborateur',
            'email.email'=>'e-mail non valide',
            'pass.required'=>'Vous de devez saisir un mot de passe'
        ]
        
         
    );
    User::create([
        'name' => $request->nom.' '. $request->prenom ,
        'email' => $request['email'],
        'password' => Hash::make($request['pass']),
        'user_type'=>'Collaborateur'
    ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
