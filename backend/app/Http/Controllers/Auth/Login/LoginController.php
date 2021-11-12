<?php

namespace App\Http\Controllers\Auth\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Users\User;


class LoginController extends Controller
{

 public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function Login(Request $request){

        $email = $request->email;
        $password = $request->password;

        if(Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect('/top');
        }

        return view('login.login');
    }

    // public function logout(Request $request)
    // {
    //    Auth::logout();

    //    return redirect('/login');
    // }

}
