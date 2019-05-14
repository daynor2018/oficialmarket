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
            'name' => ['required', 'string', 'max:191'],
            'second_name' => ['string', 'max:191'],
            'paternal_last_name' => ['required', 'string', 'max:191'],
            'maternal_last_name' => ['required', 'string', 'max:191'],
            'ci' => ['required', 'number'],
            'departament' => ['required', 'string', 'max:3'],
            'email' => ['required', 'string', 'email', 'max:191', 'unique:users'],
            'name_user' => ['required', 'string', 'max:191', 'unique:users'],
            'birthdate' => ['required', 'date'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
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
        $user = User::create([
        'name' => $data['name'],
        'second_name' => $data['second_name'],
        'paternal_last_name' => $data['paternal_last_name'],
        'maternal_last_name' => $data['maternal_last_name'],
        'ci' => $data['ci'],
        'departament' => $data['departament'],
        'email' => $data['email'],
        'name_user' => $data['name_user'],
        'birthdate' => $data['birthdate'],
        'password' => bcrypt($data['password']),
        ]);
        $user->roles()->attach(Role::where('name', 'user')->first());
        return $user;
    }
}
