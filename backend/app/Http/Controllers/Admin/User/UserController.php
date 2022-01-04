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

        return view('Admin.view.topview')
        ->with('user_list',User::user_list());
    }
}