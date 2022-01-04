<?php

namespace App\Http\Controllers\Auth\Register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index() {

        return view('Auth.Register.register');
    }

    public function register() {
        return redirect()->route('registerAdded');
    }

    public function added() {
        return view('Auth.Register.added');
    }
}
