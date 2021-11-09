<?php

namespace App\Http\Controllers\Auth\Register;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterAddedController extends Controller
{
    //

    public function added() {

       return view('login.registerAdded');
    }
}
