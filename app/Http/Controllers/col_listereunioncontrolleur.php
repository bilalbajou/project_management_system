<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class col_listereunioncontrolleur extends Controller
{
    public function index()
    {
        $i=0;
        $reunion=DB::table('view_t_u')->where('id',Auth::user()->id)->get();
        return  view('collaborateur.listereunion',compact('reunion'),compact('i')) ;
    }

}
