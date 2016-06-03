<?php

namespace App\Negocio\Repositories;
use App\Negocio\Entities\Seguimiento;

class SeguimientoRepository extends BaseRepository
{
    public function getModel()
    {
        return new Seguimiento();
    }
}