<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\Request;
use App\Http\Requests\ValidationRequest;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    //

        public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function view(ValidationRequest $request) {

        // dd($request);
        // if($request->isMethod('Post')){

        //     $data=$request->only('login_email','password');

        //     if(Auth::attempt($data)) {

        //          return redirect('/top');
        //     }
        //  }
                return view('login.login');;
}

}
