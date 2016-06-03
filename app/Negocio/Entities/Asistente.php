<?php

namespace App\Negocio\Entities;
use Illuminate\Database\Eloquent\Model;

class Asistente extends Model
{
    protected $table = 'asistentes';
    protected $fillable = ['acta_id', 'user_id'];
}
