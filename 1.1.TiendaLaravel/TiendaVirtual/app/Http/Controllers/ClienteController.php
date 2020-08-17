<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductoModel;
use App;
class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $info=App\CategoriaModel::All();
         return view('cliente', compact('info'));
     }
     
    public function cargarPro(Request $request){
        $datos= ProductoModel::where('codigo_categoria', $request->id)->get();
        return response()->json(['info'=>$datos]);

    }

   


}
