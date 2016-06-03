<?php

namespace App\Negocio\Repositories;
use App\Negocio\Entities\Acuerdo;

class AcuerdoRepository extends BaseRepository
{
    public function getModel()
    {
        return new Acuerdo();
    }
    public function all()
    {
    	return $this->model
                    ->select('acuerdos.id', 'cumplimiento', 'user_id', 'acta_id', 'texto', 'nombre', 'acuerdos.estado')
			    	->join('users', 'users.id', '=', 'acuerdos.user_id')
			    	->paginate();
    }
}