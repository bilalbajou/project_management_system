<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
      public function index(){
             $users=DB::table('view_users')->get();
             $i=0;
             return view('admin.users',['users'=>$users,'i'=>$i]);
      }
      public function activer($id){
        $user=User::find($id);
        $user->status="A";
        $user->save();
        return  redirect()->back()->with('success','Activation du compte est réussi');

        }
     public function desactiver($id){
       $user=User::find($id);
       $user->status="D";
       $user->save();
       return  redirect()->back()->with('success','Désactivation du compte est réussi');
         }
}
