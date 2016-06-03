<?php

namespace App\Negocio\Entities;

use Illuminate\Database\Eloquent\Model;

class Acta extends Model
{
    protected $table = 'actas';
    protected $fillable = ['titulo', 'motivo', 'puntos', 'conclusiones', 'reunion', 'fecha', 'estado'];
}
