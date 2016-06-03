<?php

namespace App\Negocio\Repositories;
use App\Negocio\Entities\User;

class UserRepository extends BaseRepository
{
    public function getModel()
    {
        return new User();
    }
    public function getUsuarios($roles = [])
    {
    	return $this->model->whereIn('rol_id', $roles)
					    	->lists('nombre', 'id');
    }
}