<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'alpha', 'min:2','max:50'],
            'paternal_last_name' => ['required', 'alpha', 'min:2', 'max:50'],
            'ci' => ['required', 'string', 'unique:users' ],
            'departament' => ['required', 'string', 'max:3'],
            'email' => ['required', 'string', 'max:191', 'unique:users'],
            'birthdate' => ['required'],
            'password' => ['required', 'string', 'min:7', 'confirmed','max:20'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $elemento1=substr($data['name'],0,1);
        $elemento2=substr($data['paternal_last_name'],0,1);
        $elemento4=$data['ci'];
        $user = User::create([
        'name' => $data['name'],
        'name' => $data['name'],
        'second_name' => $data['second_name'],
        'paternal_last_name' => $data['paternal_last_name'],
        'maternal_last_name' => $data['maternal_last_name'],
        'ci' => $data['ci'],
        'department' => $data['department'],
        'email' => $data['email'],
        'name_user' => strtolower($elemento1.$elemento2.$elemento4),
        'birthdate' => date("Y/m/d", strtotime($data['birthdate'])),
        'password' => bcrypt($data['password']),
        ]);
        $user->roles()->attach(Role::where('name', 'user')->first());
        return $user;
    }
}
