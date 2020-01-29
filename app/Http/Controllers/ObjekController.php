<?php
//Created by Agastya Arimbawa | 2020

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObjekController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        //get table
        $objek = DB::table('view_objeks')->get();
        //return view
        return view ('pages.items.object.object',['objek'=> $objek]);
    }

//=====================================================================================//
    
    public function tambah(){
        $layanan = DB::table('layanans')->get();
        return view ('pages.items.object.tambah_object',['layanan'=> $layanan]);
    }
    public function store(Request $request){
        if($request->nama_layanan == 0){
        $alert=[
            'required' => 'kolom wajib diisi/dipilih!'
        ];
        $this->validate($request,[
            'layanans_id' => 'required',
            'tipe_objeks' => 'required'
        ], $alert);
    }
        DB::table('objeks')->insert([
            'layanans_id' => $request->nama_layanan,
            'tipe_objeks' => $request->tipe_objeks
            ]);

            return redirect ('/pages/items/object');
    }

//=====================================================================================//
        
    public function edit($id){
        $objek = DB::table('objeks')->where('id', $id)->get();
        $layanan = DB::table('layanans')->get();

        return view('pages.items.object.edit_object',['objek' => $objek, 'layanan' => $layanan]);
    }
    public function update($id, Request $request){
        $alert=[
            'required' => 'kolom wajib diisi/dipilih!'
        ];
        $this->validate($request,[
            // 'layanans_id' => 'required',
            'tipe_objeks' => 'required'
        ], $alert);
        DB::table('objeks')->where('id', $request->id)->update([
            'layanans_id' => $request->nama_layanan,
            'tipe_objeks' => $request->tipe_objeks
        ]);
        
        return redirect('/pages/items/object');
    }

//=====================================================================================//
        
    public function destroy($id){
        DB::table('objeks')->where('id', $id)->delete();

        return redirect('/pages/items/object');
    }
}
