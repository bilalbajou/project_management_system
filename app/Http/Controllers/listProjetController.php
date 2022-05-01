<?php

namespace App\Http\Controllers;

use App\Models\projet;
use Illuminate\Http\Request;

class listProjetController extends Controller
{
    function index(){
        $projets=projet::all();
        return view('chef_projet.Listeprojet',compact('projets'));
    }

    
}
