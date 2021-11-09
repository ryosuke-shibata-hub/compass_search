<?php

namespace App\Http\Controllers\Auth\Register;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Users\User;
use App\Http\Controllers\Auth;
use Carbon\Carbon;
use App\Http\Requests\ValidationRequest;
use Illuminate\Foundation\Http\FormRequest;
use DateTime;

class RegisterController extends Controller
{
    //

    protected function create(ValidationRequest $request) {

        $username = $request->first_name . $request->last_name;

        $username_kana = $request->first_name_kana .
        $request->last_name_kana;

        $year = $request->birthday_year;
        $month = $request->birthday_month;
        $day = $request->birthday_day;

        $birthday_dateTime = Carbon::createFromDate($year, $month, $day);

        $admission_year = $request->admission_date_year;
        $admission_month = $request->admission_date_month;
        $admission_day = $request->admission_date_day;

        $admission_dateTime = Carbon::createFromDate($admission_year, $admission_month, $admission_day);

         if($request->isMethod('Post')) {

            User::create([
            'username' => $username,
            'username_kana' => $username_kana,
            'email' => $request['email'],
            'birthday' => $birthday_dateTime,
            'admission_date' => $admission_dateTime,
            'gender' => $request['gender'],
            'role' => $request['role'],
            'password' => hash::make($request['password']),
            ]);

            return redirect('/added');
                }
            return view('login.register');
        }


    }
