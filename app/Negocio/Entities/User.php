<?php

namespace App\Negocio\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = ['nombre', 'apellido', 'rol_id', 'telefono', 'email', 'direccion', 'estado', 'password'];
    protected $hidden = ['password', 'remember_token',];
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
