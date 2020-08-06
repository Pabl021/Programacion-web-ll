<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class RegistroController extends Controller
{
    public function insertarUsuarios(Request $usuario)
    {
        
        $usuario->validate([

            'nombre'=>'required',
            'apellido'=>'required',
            'telefono'=>'required',  
            'correo'=>'required|email',
            'direccion'=>'required',
            'nomUsu'=>'required',
            'contra'=>'required|min:4'

        ]);

        $instancia=new App\Registro;
        $instancia->nombre = $usuario->nombre;
        $instancia->apellido = $usuario->apellido;
        $instancia->telefono = $usuario->telefono;
        $instancia->correo = $usuario->correo;
        $instancia->direccion = $usuario->direccion;
        $instancia->nomUsu = $usuario->nomUsu;
        $instancia->contra = $usuario->contra;
        $instancia->tipo = 'cliente';
        $instancia->save();
        return redirect('login')->with('guardado','Su usuario a sido registrado con exito!!!');

    }

    public function retornar()
    {
        return view('login');
    }

}
