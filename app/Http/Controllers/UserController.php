<?php
//Created by Agastya Arimbawa | 2020

namespace App\Http\Controllers;

use App\ModelUser;
use Illuminate\Http\Request;

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
        return view ('pages.user.dashboard_user')->with('data',$listUser);
    }
    //VIEW DATA INSERT
    public function tambah_user(){
        return view ('pages.user.tambah_user');
    }
    //VIEW DATA EDIT
    public function edit_user($id){
        $listUser = \App\ModelUser::findOrFail($id);
        return view('pages.user.edit_user')->with('data',$listUser);
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
    //DELETE DATA
    public function destroy_user($id){
        $listUser = \App\ModelUser::findOrFail($id);
        
        $listUser->delete();

        return redirect('/pages/user');
    }
//=========================================USER==========================================//
}
