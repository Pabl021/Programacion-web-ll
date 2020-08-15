<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App;
use Illuminate\Support\Facades\Storage;
class ProductoController extends Controller
{    
    public function index(){
        $categoria=App\CategoriaModel::All();
        return view('crearProducto', compact('categoria'));
    }

    public function insertarPro(Request $producto)
    {

        $producto->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
            'imagen'=>'required',
            'stock'=>'required|numeric',
            'precio'=>'required|numeric',
        ]);

        $ruta= Storage::disk('public')->put('Producto', $producto->file('imagen'));
        $ruta2= asset($ruta);
       $pro=new App\ProductoModel;
       $pro->nombre= $producto->nombre;
       $pro->descripcion= $producto->descripcion;
       $pro->imagen= $ruta2;
       $pro->codigo_categoria= $producto->codigo_categoria;
       $pro->stock= $producto->stock;
       $pro->precio= $producto->precio;
       $pro->save();
         return redirect('crearPro')->with('guardado','Producto creado con éxito');
    }



}



