<?php

namespace App\Http\Controllers\Auth\Register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users\User;
use Illuminate\Support\Carbon;

class RegisterController extends Controller
{
    //
    public function index() {

        return view('Auth.Register.register');
    }

    public function register(Request $request) {

        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $username = $firstname . $lastname;

        $firstname_kana = $request->firstname_kana;
        $lastname_kana = $request->lastname_kana;
        $username_kana = $firstname_kana . $lastname_kana;

        $birthday_year = $request->birthday_year;
        $birthday_month = $request->birthday_month;
        $birthday_day = $request->birthday_day;
        $birthday = $birthday_year . $birthday_month . $birthday_day;
        $birthday = Carbon::parse($birthday)->format('Y-m-d');


        $admission_year = $request->admission_year;
        $admission_month = $request->admission_month;
        $admission_day = $request->admission_day;
        $admission_date = $admission_year . $admission_month . $admission_day;
        $admission_date = Carbon::parse($admission_date)->format('Y-m-d');

        $user = new User();

        $data['username'] = $username;
        $data['username_kana'] = $username_kana;
        $data['birthday'] = $birthday;
        $data['admission_date'] = $admission_date;
        $data['gender'] = $request->gender;
        $data['email'] = $request->email;
        $data['password'] = bcrypt($request->password);
        $data['role'] = $request->role;

        $user->fill($data)->save();

        return redirect()->route('registerAdded')
        ->with($request->all());
    }

    public function added() {
        return view('Auth.Register.added');
    }
}
