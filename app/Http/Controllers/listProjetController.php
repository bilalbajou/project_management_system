<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listProjetController extends Controller
{
    function index(){
        return view('chef_projet.Listeprojet');
    }
}
