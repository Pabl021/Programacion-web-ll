<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class CategoriaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
         return view('categoria');
     } 

     public function index1(){
         $objeto=App\CategoriaModel::All();
        return view('manipularCat', compact('objeto'));
    }


    public function insertarCategoria(Request $datos)
    {
      
        $datos->validate([
            'categoria'=>'required'
        ]);
        $insCat=new App\CategoriaModel;
        $insCat->nombre= $datos->categoria;
        $insCat->save();
        return redirect('home')->with('guardado','Categoría creada exitosamente');
    }

    public function eliminarCat($id)
    {
        $eliminarCat=App\CategoriaModel::FindOrFail($id);
        $eliminarCat->delete();
        return redirect('manipular')->with('guardado','Categoría eliminada exitosamente');
    }

    public function editarCat($id)//carga datos
    {
        $editar=App\CategoriaModel::FindOrFail($id);
        return view('actualizarCat',compact('editar'));
    }

    public function editarCategoria(Request $datos)//me edita definitivo los datos
    {
        $datos->validate([
            'categoria'=>'required'
        ]);
        $insCat= App\CategoriaModel::FindOrFail($datos->id);      
        $insCat->nombre= $datos->categoria;
        $insCat->update();
        return redirect('manipular')->with('guardado','Categoría editada exitosamente');
    }


}
