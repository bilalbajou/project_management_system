<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function activer($id){
        $user=User::find($id);
        $user->status="A";
        $user->save();
        return  redirect()->back()->with('success','Activation du compte est réussi');

   }
   public function désactiver($id){
   $user=User::find($id);
   $user->status="D";
   $user->save();
   return  redirect()->back()->with('success','Désactivation du compte est réussi');
  }
}
