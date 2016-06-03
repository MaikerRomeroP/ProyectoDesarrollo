<?php

namespace App\Negocio\Entities;
use Illuminate\Database\Eloquent\Model;

class Seguimiento extends Model
{
    protected $table = 'seguimientos';
    protected $fillable = ['acuerdo_id', 'texto', 'fechaFin', 'estado'];
}
