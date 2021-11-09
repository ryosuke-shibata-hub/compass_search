<?php

namespace App\Models\Users;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // protected $dates = [
    //     'birthday_year',
    //     'birthday_moon',
    //     'birthday_day'
    // ];

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
}
