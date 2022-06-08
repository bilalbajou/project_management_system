<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public function index(){
        $role=Auth::user()->user_type;
        $status=Auth::user()->status;
        switch($status) {
            case 'A':
             if($role=="Chef du projet")
             return view('chef_projet.dashboard');
             else if($role=="Collaborateur")
             return view('collaborateur.test');
             else if($role=='Webmaster')
             return view('admin.dashboard');
             else 
              abort(403);
            case 'D':
               Auth::logout();
              return redirect()->route('login')->with('error','Votre compte est désactivé');

        }

    }
}


