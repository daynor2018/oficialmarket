<?php

use Illuminate\Database\Seeder;
use App\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $depa = new Department();
        $depa->name = 'beni';
        $depa->save();
        $depa = new Department();
        $depa->name = 'cochabamba';
        $depa->save();
        $depa = new Department();
        $depa->name = 'chuquisaca';
        $depa->save();
        $depa = new Department();
        $depa->name = 'la paz';
        $depa->save();
        $depa = new Department();
        $depa->name = 'oruro';
        $depa->save();
        $depa = new Department();
        $depa->name = 'pando';
        $depa->save();
        $depa = new Department();
        $depa->name = 'potosi';
        $depa->save();
        $depa = new Department();
        $depa->name = 'santa cruz';
        $depa->save();
        $depa = new Department();
        $depa->name = 'tarija';
        $depa->save();
    }
}
