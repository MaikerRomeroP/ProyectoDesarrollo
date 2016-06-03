<?php

namespace App\Negocio\Repositories;
use App\Negocio\Entities\Acta;
use App\Negocio\Entities\Asistente;
class ActaRepository extends BaseRepository
{
    public function getModel()
    {
        return new Acta();
    }
    public function getAsistentes($acta)
    {

    	$sql = Asistente::join('users', 'users.id', '=', 'asistentes.user_id')
    						->where('acta_id', $acta)
    						->where('asistentes.estado', '1')
    						->lists('users.nombre', 'users.id');
    	return $sql;
    }

}