<?php

namespace App\Http\Controllers\Auth\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    //
    public function index() {
        return view('Auth.Login.login');
    }

    public function login(Request $request) {

        $data['email'] = $request->email;
        $data['password'] = $request->password;

        if (Auth::attempt($data)) {
            return redirect()->route('top.index');
        }
            return back()
            ->with('login_erro','*メールアドレスまたはパスワードが違います。');

    }

    public function logout() {
         Auth::logout();
        return redirect()->route('loginForm');
    }
}
