<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

//=====================================ADMIN/TEKNISI=======================================//
    public function admin(){
        return view ('pages.otorisasi.indexAdmin');
    }
//=====================================ADMIN/TEKNISI=======================================//
}