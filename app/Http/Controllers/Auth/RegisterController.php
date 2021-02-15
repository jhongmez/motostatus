<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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

        if(session()->get('locale') == 'es') {
            $messages = array(
                'name.required'         => 'El campo "Nombre" es Obligatorio.',
                'surname.required'      => 'El campo "Apellido" es Obligatorio.',
                'email.required'        => 'El campo "Correo" es Obligatorio.',
                'password.required'     => 'El campo "Contraseña" es Obligatorio.',
            );
        }
        else {
            $messages = array(
                'name.required'         => 'El campo "Nombre" es Obligatorio.',
                'surname.required'      => 'El campo "Apellido" es Obligatorio.',
                'email.required'        => 'El campo "Correo" es Obligatorio.',
                'password.required'     => 'El campo "Contraseña" es Obligatorio.',
            );
        }

        // Valida el registro del usuario
        return Validator::make($data, [
            'name'          => ['required'],
            'surname'       => ['required'],
            'email'         => ['required', 'email', 'unique:users'],
            'password'      => ['required', 'min:6', 'confirmed'],
        ], $messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // Saber si llegaron los datos 
        //dd($data);

        // Crea el usuario
        return User::create([
            'name'      => $data['name'],
            'surname'   => $data['surname'],
            'email'     => $data['email'],
            'password'  => Hash::make($data['password']),
        ]);
    }
}
