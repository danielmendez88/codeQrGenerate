<?php

namespace CodeQr\Models;

use Illuminate\Database\Eloquent\Model;
use CodeQr\Personal;

class AreaAdscripcion extends Model
{
    //
    protected $table = 'area_adscripcions';

    protected $fillable = [
    	'id', 'area', 'organo_id'
    ];

    protected $hidden = [
    	'created_at', 'updated_at'
    ];

    public function personal()
    {
    	return $this->hasMany(Personal::class);
    }
    
}
