<?php

namespace App\Http\Controllers;

use App\Models\tache;
use App\Models\reunion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public function index(){
        $role=Auth::user()->user_type;
        $status=Auth::user()->status;
        // $reunion=DB::table('reunion_view_v2')->where('id',Auth::user()->id)->get();
        switch($status) {
            case 'A':
             if($role=="Chef du projet")
             return view('chef_projet.dashboard');
             else if($role=="Collaborateur")
             return view('collaborateur.dashboard');
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


