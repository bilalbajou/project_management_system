<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\ContactMailToWebmaster;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class homeController extends Controller
{
    public function index(){
     return view('home');
    }
    
    public function store(Request $request){

       

       $contact=Contact::create([
             'Nom'=>$request->Nom,
             'email'=>$request->Email,
             'objet'=>$request->objet,
             'Numéro'=>$request->Numéro,
             'Message'=>$request->message
         ]);

          Mail::to($request->Email)->send(new ContactMail($contact));
          Mail::to('bilalbajou05@gmail.com')->send(new ContactMailToWebmaster($contact));
          return back();
    }
}



