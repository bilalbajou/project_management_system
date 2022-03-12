<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addTacheController extends Controller
{
    function index(){
        return view('chef_projet.addtache');
    }
}
