<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public function index(){
        $role=Auth::user()->user_type;
        if($role=="Chef du projet"){
            return view('chef_projet.dashboard');
        }
        else if($role=="Webmaster"){
            return view('admin.adminHome');
        }
        else if($role=="Collaborateur"){
                
        }
        else 
          return view('403');
    }
}


