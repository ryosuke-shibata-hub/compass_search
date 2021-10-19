<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class UserScore extends Model
{
    protected $table = 'user_scores';

    protected $fillable = [
        'user_id',
        'score',
    ];
}
