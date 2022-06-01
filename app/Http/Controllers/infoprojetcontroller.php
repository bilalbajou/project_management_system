<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class infoprojetcontroller extends Controller
{
    function index(){
        return view('chef_projet.infoprojet');
    }
}
