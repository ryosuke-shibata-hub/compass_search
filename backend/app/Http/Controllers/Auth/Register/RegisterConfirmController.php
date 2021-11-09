<?php

namespace App\Http\Controllers\Auth\Register;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class RegisterConfirmController extends Controller
{
    //

    public function register(Request $request) {

        return view('login.register');
    }
}
