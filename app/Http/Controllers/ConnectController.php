<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Hash, Auth;
use App\Models\User;

class ConnectController extends Controller
{
    public function __construct(){
      $this->middleware('guest')->except(['getLogout']);
    }

    public function getLogin(){
        return view('connect.login');
    }


    public function postLogin(Request $request){
        $rules = [
           'email' => 'required|email',
           'password' => 'required|min:8'
        ];

        $message=[

            'email.required' => 'Su correo electrónico es requerido.',
            'email.email' => 'El formato de su correo es invalido.',
            'password.required' => 'Por favor escriba una contraseña.',
            'password.min' => 'La contraseña debe de tener al menos 8 Caracteres.'

        ];

        $validator = Validator::make($request->all(), $rules, $message);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error.')->with('typealert','danger');
        else:
            if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], true)):
                return redirect('/admin');
            else:
                return back()->with('message','Correo electrónico o contraseña erronea.')->with('typealert','danger');
            endif;
        endif;
    }

    public function getRegistra(){
        return view('connect.registra');
    }

    public function postRegistra(Request $request){
        $rules = [
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email|unique:Users,email',
            'password' => 'required|min:8',
            'cpassword' => 'required|same:password'

        ];

        $message=[
            'nombre.required' => 'Su nombre es requerido.',
            'apellido.required' => 'Su apellido es requerido.',
            'email.required' => 'Su correo electrónico es requerido.',
            'email.email' => 'El formato de su correo es invalido.',
            'email.unique' => 'Ya existe un usuario registrado con ese correo.',
            'password.required' => 'Por favor escriba una contraseña.',
            'password.min' => 'La contraseña debe de tener al menos 8 Caracteres.',
            'cpassword' => 'Es necesario confirmar contraseña.',
            'cpassword.min' => 'La confirmacion de la contraseña debe de tener al menos 8 Caracteres.',
            'cpassword.same' => 'Las contraseñas no coinciden.'

        ];

        $validator = Validator::make($request->all(), $rules, $message);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error.')->with('typealert','danger');
        else:
            $user = new User;
            $user->nombre = e($request->input('nombre'));
            $user->apellido = e($request->input('apellido'));
            $user->email = e($request->input('email'));
            $user->password = Hash::make($request->input('password')); 

            if($user->save()):
                return redirect('/login')->with('message','Su usuario se creo correctamente, puede iniciar sesion.')->with('typealert','success');
            endif;
        endif;
    }

    public function getLogout(){
        Auth::logout();
        return redirect('/login');
    }
}
