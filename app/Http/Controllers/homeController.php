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

       

         Contact::create([
             'Nom'=>$request->Nom,
             'email'=>$request->Email,
             'objet'=>$request->objet,
             'Numéro'=>$request->Numéro,
             'Message'=>$request->message
         ]);
         
    }
}



