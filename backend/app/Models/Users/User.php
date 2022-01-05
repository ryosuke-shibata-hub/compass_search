<?php

namespace App\Models\Users;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'birthday',
        'admission_date',
    ];

    protected $fillable = [
        'user_id',
        'math_teacher_user_id',
        'japanese_language_user_id',
        'username',
        'username_kana',
        'birthday',
        'admission_date',
        'gender',
        'email',
        'password',
        'role',
    ];

    public function score() {
        return $this->hasMany('App\Models\Users\UserScore','user_id');
    }

    public function math_teacher() {

        return $this->hasMany('App\Models\Users\UserPersonCharge')
        ->join('users','user_person_charges.math_teacher_user_id',"=",'users.id');
    }

     public function japanese_language() {

        return $this->hasMany('App\Models\Users\UserPersonCharge')
        ->join('users','user_person_charges.japanese_language_user_id',"=",'users.id');
    }
    public static function UserQuery() {
        return self::with([
            'score',
            'math_teacher',
            'japanese_language',
        ]);
    }

    public static function user_list() {
        return self::UserQuery()->take(5)->get();
    }
}
