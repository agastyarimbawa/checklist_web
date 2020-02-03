<?php
//Created by Agastya Arimbawa | 2020

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerangkatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $perangkat = DB::table('view_perangkats')->get();

        return view ('Pages.Items.Perangkat.perangkat',['perangkat'=>$perangkat]);
    }
    
    //=====================================================================================//
    
    public function tambah(){
        $layanan = DB::table('layanans')->get();
        $objek = DB::table('objeks')->get();

        return view ('Pages.Items.Perangkat.tambah_perangkat',['layanan'=> $layanan, 'objek' => $objek]);
    }
    public function store(Request $request){
        if ($request->nama_layanan && $request->tipe_objeks == 0) {
            $alert=[
                'required' => 'kolom wajib diisi/dipilih!'
            ];
            $this->validate($request,[
                'layanans_id' => 'required',
                'objeks_id' => 'required',
                'nama_perangkats' => 'required'
            ], $alert);
        }
        
        DB::table('perangkats')->insertTs([
            'layanans_id' => $request->nama_layanan,
            'objeks_id' => $request->tipe_objeks,
            'nama_perangkats' => $request->nama_perangkats
        ], true);

            return redirect ('/pages/items/perangkat');
        }
                
    //=====================================================================================//

    public function edit($id){
        $perangkat = DB::table('perangkats')->where('id', $id)->get();
        $layanan = DB::table('layanans')->get();
        $objek = DB::table('objeks')->get();
        
        return view('Pages.Items.Perangkat.edit_perangkat',['perangkat' => $perangkat, 'layanan' => $layanan, 'objek' => $objek]);
    }
    public function update($id, Request $request){
        if ($request->nama_layanan && $request->tipe_objeks == 0) {
            $alert=[
                'required' => 'kolom wajib diisi/dipilih!'
            ];
            $this->validate($request,[
                'layanans_id' => 'required',
                'objeks_id' => 'required',
                'nama_perangkats' => 'required'
            ], $alert);
        }

        DB::table('perangkats')->where('id', $request->id)->updateTs([
            'layanans_id' => $request->nama_layanan,
            'objeks_id' => $request->tipe_objeks,
            'nama_perangkats' => $request->nama_perangkats
        ]);
            
            return redirect('/pages/items/perangkat');
    }
            
    //=====================================================================================//

    public function destroy($id){
        DB::table('perangkats')->where('id', $id)->delete();

        return redirect('/pages/items/perangkat');
    }
}

    
    