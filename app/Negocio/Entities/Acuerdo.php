<?php

namespace App\Negocio\Entities;
use Illuminate\Database\Eloquent\Model;

class Acuerdo extends Model
{
    protected $table = 'acuerdos';
    protected $fillable = ['cumplimiento', 'user_id', 'acta_id', 'texto'];
}
