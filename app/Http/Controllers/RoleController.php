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
        switch($status) {
            case 'A':
             if($role=="Chef du projet"){
             $projets=DB::table('projets')->where('Chef_projet',Auth::user()->id)->count();
             $taches=DB::table('view_tache')->where('Chef_projet',Auth::user()->id)->count();
             $collabs=DB::table('users')->where('invited_by',Auth::user()->id)->count();
             $reunions=DB::table('view_reunion')->where('Chef_projet',Auth::user()->id)->count();
             return view('chef_projet.dashboard',['projets'=>$projets,'taches'=>$taches,'collabs'=>$collabs,'reunions'=>$reunions]);
            }
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


