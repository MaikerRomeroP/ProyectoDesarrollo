<?php

namespace App\Negocio\Repositories;


use App\Negocio\Entities\User;

abstract class BaseRepository
{
    protected $model;
    public function __construct()
    {
        $this->model = $this->getModel();
    }

    abstract public function getModel();
    public function all(){
        return $this->model->where('estado', '1')
                            ->paginate(12);
    }

    public function find($id){
        return $this->model->findOrFail($id);
    }
}