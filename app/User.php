<?php

namespace CodeQr;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use CodeQr\Personal;
use CodeQr\Models\Role;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function personal()
    {
        return $this->belongsToMany(Personal::class, 'user_personal', 'user_id', 'personal_id');
    }

    public function roles(){
        return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id');
    }

    /**
     * funcion para validar
     */
    public function hasRole($role) {
        if ($this->roles()->where('nombre', $role)->first()) {
            # code...
            return true;
        }
        return false;
    }
    /**
     * validar cuántos roles posee la cuenta
     */
    public function hasAnyRole($roles) {
        if (is_array($roles)) {
            # code...
            foreach ($roles as $role) {
                # code...
                if ($this->hasRole($role)) {
                    # code...
                    return true;
                }
            }
        } else {
            # code...
            if ($this->hasRole($roles)) {
                # code...
                return true;
            }
        }
        return false;
    }

    /**
     * función para autorizar Roles
     */
    public function authorizeRoles($roles){
        if ($this->hasAnyRole($roles)) {
            # validar el nivel de usuario o privilegios
            return true;
        }
        abort(401, 'Esta acción está desautorizada');
    }
}
