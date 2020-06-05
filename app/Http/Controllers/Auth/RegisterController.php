<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


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
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'rol_id' => 2,
        ]);
    }

    public function update(Request $request, $id)
    {
        $newP=User::find($id); //busco el id en la BD
        $newP->name=$request->input('Nombre'); //sustituyo por los nuevos valores
        $newP->email=$request->input('Email');
        //$newP->password=$request->input('Contraseña');
        $newP->save();
        dd($newP->email);

        $usuario = Auth::user(); // obtengo el usuario
        //$usuario = $usuario->name;// almaceno su nombre
        $usuario= $usuario->id;
        $usuario=User::find($usuario);
        $nombre=$usuario->name;
        $email=$usuario->email;
        $contra=$usuario->password;
        $id=$usuario->id;
        return view('admin.users.perfil',compact("nombre","email","contra","id"));
    }

    protected function createAdmin()
    {
        $user = User::where('name','admin') -> first();

        if ($user==null){
       User::create([
            'name' => "admin",
            'email' => "admin@gmail.com",
            'password' => Hash::make(12345678),
            'rol_id' => 1,
        ]);
        }
    }
}
