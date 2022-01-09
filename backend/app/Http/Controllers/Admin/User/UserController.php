<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Users\User;
use App\Models\Users\UserPersonCharge;
use Carbon\Carbon;

class UserController extends Controller
{
    //

    public function index() {

        $user_list = User::paginate(10);

        $CODE_VALUE = array();


        // dd($CODE_VALUE);

        return view('Admin.view.topview')
        ->with('user_list',$user_list)
        ->with("CODE_VALUE",$CODE_VALUE);
    }
}
