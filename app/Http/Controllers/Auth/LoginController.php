<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {

        $notification_gagal = array(
            'message' => 'Login Gagal',
            'alert-type' => 'error'
        );

         $notification_berhasil = array(
            'message' => 'Login berhasil',
            'alert-type' => 'success'
        );

        if(!\Auth::attempt(['email' => $request->email, 'password' => $request->password ])){
            return redirect()->back()->with($notification_gagal);

        }else {
            if(\Auth::user()->role=="teknisi"){
                return redirect('/home')->with($notification_berhasil);
                //return redirect()->intended('defaultpage');
            }else{
                return redirect('/home')->with($notification_berhasil);
            }
        }
    
    }
}
