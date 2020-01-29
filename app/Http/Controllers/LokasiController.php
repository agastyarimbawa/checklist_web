<?php
//Created by Agastya Arimbawa | 2020

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LokasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $lokasi = DB::table('locations')->get();
        //return $listLayanan;
        return view ('pages.items.lokasi.lokasi',['lokasi'=> $lokasi]);
    }

//=====================================================================================//

    public function tambah(){
        return view ('pages.items.lokasi.tambah_lokasi');
    }
    public function store(Request $request){
        $alert=[
            'required' => 'kolom wajib diisi/dipilih!'
        ];
        $this->validate($request,[
            'nama_lokasi' => 'required'
        ]);
        DB::table('locations')->insert([
            'nama_lokasi' => $request->nama_lokasi
        ], $alert);

        return redirect ('/pages/items/lokasi');
    }

//=====================================================================================//

    public function edit($id){
        $lokasi = DB::table('locations')->where('id', $id)->get();

        return view('pages.items.lokasi.edit_lokasi',['lokasi' => $lokasi]);
    }
    public function update(Request $request){
        $alert=[
            'required' => 'kolom wajib diisi/dipilih!'
        ];
        $this->validate($request,[
            'nama_lokasi' => 'required'
        ], $alert);
        DB::table('locations')->where('id', $request->id)->update([
            'nama_lokasi' => $request->nama_lokasi
        ]);
        
        return redirect('/pages/items/lokasi');
    }

//=====================================================================================//

    public function destroy($id){
        DB::table('locations')->where('id', $id)->delete();

        return redirect('/pages/items/lokasi');
    }
}
