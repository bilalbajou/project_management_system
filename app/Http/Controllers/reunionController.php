<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reunionController extends Controller
{
      public function create(){
            return view('chef_projet.addReunion');
      }
}
