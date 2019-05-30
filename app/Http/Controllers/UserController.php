<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class UserController extends Controller
{
    public function showuser()
    {
        $alluser = User::alluser();
        return view('alluser', compact('alluser'));
    }

    public function adduser()
    {
        $rol='user';
        return view('adduser', compact('rol'));
    }

    public function registeruser(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|alpha|max:30',
            'paternal_last_name' => 'required|alpha|max:30',
            'maternal_last_name' => 'alpha|max:30',
            'ci' => 'numeric|required|integer|digits_between:6,10|unique:users',
            'department'=> 'required',
            'email'=>'required|string|unique:users',
            'password'=>'required|string|confirmed|min:8|max:30'
        ]);
        $user = new User();
        $user->name=strtolower($request->name);
        $user->second_name=strtolower($request->second_name);
        $user->paternal_last_name=strtolower($request->paternal_last_name);
        $user->maternal_last_name=strtolower($request->maternal_last_name);
        $user->ci=$request->ci;
        $user->department=$request->department;
        $user->email=strtolower($request->email);
        $elemento1=substr($request->name,0,1);
        $elemento2=substr($request->paternal_last_name,0,1);
        $elemento4=$request->ci;
        $user->name_user=strtolower($elemento1.$elemento2.$elemento4);
        $user->birthdate=date("Y/m/d", strtotime($request->birthdate));
        $user->password=strtolower($request->password);
        $user->save();
        if ($request->rol == "user") {
            $user->roles()->attach(Role::where('name', 'user')->first());
            return redirect(route('showuser'))->with('successMsg','Guardado con exito!');    
        }else{
            if($request->rol == "cashier"){
                $user->roles()->attach(Role::where('name', 'cashier')->first());
                return redirect(route('showcashier'))->with('successMsg','Guardado con exito!');
            }else{
                if($request->rol == "employee"){
                    $user->roles()->attach(Role::where('name', 'employee')->first());
                    return redirect(route('showemployee'))->with('successMsg','Guardado con exito!');
                }
            }
        }
    }

    public function showcashier()
    {
        $user = User::all();
        return view('homeemployee', compact('user'));
    }

    public function showemployee()
    {
        $user = User::all();
        return view('homeemployee', compact('user'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
