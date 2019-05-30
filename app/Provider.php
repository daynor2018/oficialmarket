<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Provider extends Model
{   
    public static function activeproviders(){
        $alluser = DB::table('activeproviders')
            ->select('activeproviders.*')->get();
        return $alluser;
    }
    
    public static function inactiveproviders(){
        $alluser = DB::table('inactiveproviders')
            ->select('inactiveproviders.*')->get();
        return $alluser;
    }
}
