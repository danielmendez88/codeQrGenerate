<?php

namespace CodeQr\Models;

use Illuminate\Database\Eloquent\Model;

class user_personal extends Model
{
    //
    protected $table = 'user_personal';

    protected $fillable = ['user_id', 'personal_id'];
}
