<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addprojetController extends Controller
{
    function index(){
        return view('chef_projet.addprojet');
    }
}
