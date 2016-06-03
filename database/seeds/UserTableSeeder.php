<?php
use App\Negocio\Entities\User;
use Illuminate\Database\Seeder;
use Faker\Factory;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->nombre = 'administrador';
        $user->apellido = 'sistemas';
        $user->password = 'secret';
        $user->rol_id = 1;
        $user->telefono = '789456123';
        $user->email = 'admin@gmail.com';
        $user->direccion = 'calle admin';
        $user->save();
        $faker = Factory::create();
        for ($i=0; $i < 20; $i++) {
            $user = new User();
            $user->nombre = $faker->name;
            $user->apellido = $faker->lastName;
            $user->password = 'secret';
            $user->rol_id = $faker->randomElement([2, 3, 4, 5]);
            $user->telefono = $faker->phoneNumber;
            $user->email = $faker->email;
            $user->direccion = $faker->city;
            $user->save();
        }
    }
}
