<?php

use Illuminate\Database\Seeder;
use App\Negocio\Entities\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(RolTableSeeder::class);
        $this->call(UserTableSeeder::class);

    }
}
