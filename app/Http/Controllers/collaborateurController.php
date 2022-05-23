<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class collaborateurController extends Controller
{
    public function create(){
        return view('chef_projet.addCollaborateur');
    }
    public function store(Request $request){
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
}
