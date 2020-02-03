<?php
//Created by Agastya Arimbawa | 2020

namespace App\Http\Controllers;

use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //=========================================USER==========================================//
    public function __construct()
    {
        $this->middleware('auth');
    }
    //VIEW DATA
    public function user(){
        //Eloquent
        $listUser = ModelUser::all(); //select * from 'table'
    
        //return $listUser;
        return view ('Pages.User.dashboard_user')->with('data',$listUser);
    }

//=====================================================================================//
    
    public function tambah_user(){
        return view ('Pages.User.tambah_user');
    }
    public function store(Request $request){
        $alert=[
            'required' => 'kolom wajib diisi/dipilih!'
        ];
        $this->validate($request,[
            'nama_layanan' => 'required'
        ], $alert);
        \DB::table('users')->insert([
            'nama_layanan' => $request->nama_layanan
        ], true);

        return redirect ('/pages/items/layanan');
    }
    
//=====================================================================================//

    public function edit_user($id){
        $listUser = \App\ModelUser::findOrFail($id);
        return view('Pages.User.edit_user')->with('data',$listUser);
    }
    public function update_user($id, Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required'
        ]);

        $listUser = \App\ModelUser::findOrFail($id);
        $listUser->name = $request->name;
        $listUser->email = $request->email;
        $listUser->save();
        return redirect('/pages/user')->with('data',$listUser);
    }
    
//=====================================================================================//

    public function destroy_user($id){
        $listUser = \App\ModelUser::findOrFail($id);
        
        $listUser->delete();

        return redirect('/pages/user');
    }
//=========================================USER==========================================//
}
