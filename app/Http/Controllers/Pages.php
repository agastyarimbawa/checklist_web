<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Pages extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

//=======================================ADMIN=========================================//
    public function index(){
        $layanan = DB::table('layanans')->count();
        $alat = DB::table('layanans')->count();
        
        return view ('pages.otorisasi.indexAdmin',['layanan'=> $layanan], ['alat'=> $alat]);
    }
//=======================================ADMIN/=========================================//



//======================================TEKNISI=========================================//
    public function teknisi(){
        $layanan = DB::table('layanans')->count();
        $alat = DB::table('layanans')->count();
        
        return view ('pages.otorisasi.indexAdmin',['layanan'=> $layanan], ['alat'=> $alat]);
    }
//======================================TEKNISI=========================================//
}