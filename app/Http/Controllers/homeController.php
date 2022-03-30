<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
class homeController extends Controller
{
    public function index(){
     return view('home');
    }
    
    public function store(Request $request){

        $validated = $request->validate([
            'Nom' => 'required|string|max:30|',
            'Email' => 'required|email',
            'objet'=>'required|string',
            'message'=>'required|max:255',
            'Numéro'=>'digits_between:10,30'
        ]);

         Contact::create([
             'Nom'=>$request->Nom,
             'email'=>$request->Email,
             'objet'=>$request->objet,
             'Numéro'=>$request->Numéro,
             'Message'=>$request->message
         ]);
         
    }
}



