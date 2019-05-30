<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role; 

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();
        $role_employee = Role::where('name', 'employee')->first();
        $role_cashier = Role::where('name', 'cashier')->first();

        $user = new User();
        $user->department_id = '4';
        $user->name = 'daynor';
        $user->paternal_last_name = 'plata';
        $user->name_user = 'keydaypadmin';
        $user->cinit = '7062781018';
        $user->email = 'daynor@gmail.com';     
        $user->birthdate = '1997/11/22';
        $user->genre = 'm';
        $user->password = bcrypt('aui%&PYD');
        $user->save();
        $user->roles()->attach($role_admin);
    }
}