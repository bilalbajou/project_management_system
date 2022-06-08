<?php

namespace App\Http\Controllers;

use App\Models\projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class col_listeprojetcontrolleur extends Controller
{
    public function index()
    {
        
        $projet=DB::table('view__p_u')->where('id',Auth::user()->id)->get();
        return  view('collaborateur.listeprojet',compact('projet')) ;
    }
}
