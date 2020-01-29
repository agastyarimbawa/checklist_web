<?php
//Created by Agastya Arimbawa | 2020

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LayananController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $layanan = DB::table('view_layanans')->get();
        //return $listLayanan;
        return view ('pages.items.layanan.layanan',['layanan'=> $layanan]);
    }

//=====================================================================================//

    public function tambah(){
        return view ('pages.items.layanan.tambah_layanan');
    }
    public function store(Request $request){
        $alert=[
            'required' => 'kolom wajib diisi/dipilih!'
        ];
        $this->validate($request,[
            'nama_layanan' => 'required'
        ], $alert);
        DB::table('layanans')->insertTs([
            'nama_layanan' => $request->nama_layanan
        ], true);

        return redirect ('/pages/items/layanan');
    }

//=====================================================================================//

    public function edit($id){
        $layanan = DB::table('layanans')->where('id', $id)->get();

        return view('pages.items.layanan.edit_layanan',['layanan' => $layanan]);
    }
    public function update(Request $request){
        $alert=[
            'required' => 'kolom wajib diisi/dipilih!'
        ];
        $this->validate($request,[
            'nama_layanan' => 'required'
        ], $alert);
        DB::table('layanans')->where('id', $request->id)->updateTs([
            'nama_layanan' => $request->nama_layanan
        ], true);
        
        return redirect('/pages/items/layanan');
    }

//=====================================================================================//

    public function destroy($id){
        DB::table('layanans')->where('id', $id)->delete();

        return redirect('/pages/items/layanan');
    }
}
