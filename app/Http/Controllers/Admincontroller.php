<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admincontroller extends Controller
{
    public function index(){
        $usertype=Auth::user()->usertype;
        if($usertype=='admin')
        return view('admin.adminHome');
        else
          return view('home');
    }
}
