<?php

use Illuminate\Database\Seeder;
use App\Negocio\Entities\Rol;
class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $roles = ['admin', 'cliente', 'proveedor', 'gerente', 'empleado'];
    public function run()
    {
        foreach ($this->roles as $rol) {
        	$tmp = new Rol();
        	$tmp->nombre = $rol;
        	$tmp->save();
        }
    }
}
