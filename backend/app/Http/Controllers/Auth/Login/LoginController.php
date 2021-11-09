<?php

namespace App\Http\Controllers\Auth\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function Login() {

        return view('login.login');
    }

}
