<?php

namespace CodeQr\Models;

use Illuminate\Database\Eloquent\Model;
use CodeQr\User;

class Role extends Model
{
    //
    protected $fillable = [
        'id', 'nombre', 'descripcion',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'role_user', 'role_id', 'user_id');
    }
}
