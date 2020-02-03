<?php
//Created by Agastya Arimbawa | 2020

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $alat = DB::table('view_alats')->get();

        return view ('pages.items.alat.alat',['alat'=>$alat]);
    }

//=====================================================================================//

    public function tambah(){
        $layanan = DB::table('layanans')->get();
        $objek = DB::table('objeks')->get();
        $perangkat = DB::table('perangkats')->get();
        $lokasi = DB::table('locations')->get();

        return view ('pages.items.alat.tambah_alat',['layanan'=>$layanan, 'objek'=>$objek, 'perangkat'=>$perangkat, 'lokasi'=>$lokasi]);
    }
    public function store(){
        $alert=[
            'required' => 'kolom wajib diisi/dipilih!'
        ];
        $this->validate($request,[
            'layanans_id' => 'required',
            'objeks_id' => 'required',
            'perangkats_id' => 'required',
            'locations_id' => 'reqruired',
            'merek' => 'required',
            'model' => 'required',
            'serial_number' => 'required',
            'year_construct' => 'required',
            'status' => 'required'
        ], $alert);
        
        DB::table('objeks')->insertTs([
            'layanans_id' => $request->nama_layanan,
            'objeks_id' => $request->tipe_objeks,
            'perangkats_id' => $request->nama_perangkat,
            'locations_id' => $request->nama_lokasi,
            'merek' => $request->merek,
            'model' => $request->mmodel,
            'serial_number' => $request->serial_number,
            'year_construct' => $request->year_construct,
            'status' => 'required'
            ]);

            return redirect ('/pages/items/alat');
    }

//=====================================================================================//

    public function edit($id){

    }
    
//=====================================================================================//

    public function destroy($id){
        DB::table('alats')->where('id', $id)->delete();

        return redirect('/pages/items/alats');
    }
}
