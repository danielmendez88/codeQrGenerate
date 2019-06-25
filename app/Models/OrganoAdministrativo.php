<?php

namespace CodeQr\Models;

use Illuminate\Database\Eloquent\Model;
use CodeQr\Personal;

class OrganoAdministrativo extends Model
{
    // datos del modelo organo administrativo
    protected $table = 'organo_administrativos';

    protected $fillable = [
    	'id', 'organo', 'descripcion'
    ];

    protected $hidden = [
    	'created_at', 'updated_at'
    ];

    public function personal()
    {
    	return $this->hasMany(Personal::class);
    }
}
