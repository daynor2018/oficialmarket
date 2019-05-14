<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'admin';
        $role->description = 'administrador';
        $role->save();
        $role = new Role();
        $role->name = 'user';
        $role->description = 'usuario';
        $role->save();
        $role = new Role();
        $role->name = 'employee';
        $role->description = 'empleado';
        $role->save();
        $role = new Role();
        $role->name = 'cashier';
        $role->description = 'cajero';
        $role->save();
    }
}
