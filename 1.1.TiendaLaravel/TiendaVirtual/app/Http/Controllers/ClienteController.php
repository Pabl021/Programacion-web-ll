<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $dato){       
        $idCat=intval($dato->input('select'));
        $producto=App\ProductoModel::where('codigo_categoria',$idCat)->get();
        $info=App\CategoriaModel::All();
         return view('cliente', compact('info'), compact('producto'));
     }

    

}
