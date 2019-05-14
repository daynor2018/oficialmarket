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
        $user->name = 'daynor';
        $user->second_name = 'hernando';
        $user->paternal_last_name = 'plata';
        $user->maternal_last_name = 'huanca';
        $user->ci = '7062781';
        $user->department = 'lp';
        $user->email = 'daynor@gmail.com';
        $user->name_user = 'keydaypadmin';
        $user->birthdate = '1996/11/22';
        $user->password = bcrypt('aui%&PYD');
        $user->save();
        $user->roles()->attach($role_admin);
        $user->roles()->attach($role_user);
        $user->roles()->attach($role_employee);
        $user->roles()->attach($role_cashier);
    }
}