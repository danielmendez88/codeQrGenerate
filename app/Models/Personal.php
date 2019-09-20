<?php

namespace CodeQr;

use Illuminate\Database\Eloquent\Model;
use CodeQr\AreaAdscripcion;
use CodeQr\OrganoAdministrativo;
use CodeQr\User;

class Personal extends Model
{
    //
    protected $table = 'personals';

    protected $fillable = ['id', 'numeroEnlace', 'categoria', 'organo_id', 'adscripcion_id', 'puesto', 'nombre', 'activo', 'generado', 'apaterno', 'amaterno', 'hashedNumero'];

    protected $hidden = ['created_at', 'updated_at'];
    
    /**
    * get area adscription for the personal
    */
    public function adscription()
    {
    	return $this->belongsTo(AreaAdscripcion::class);
    }

    public function organoasAdmin()
    {
    	return $this->belongsTo(OrganoAdministrativo::class);
    }

    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'user_personal', 'personal_id', 'user_id');
    }
}
