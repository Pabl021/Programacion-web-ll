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

    public function index1(){//carga vista manipular producto
        $info=App\ProductoModel::All();
       return view('manipularPro', compact('info'));      
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

    public function eliminarPro($id)
    {
        $eliminarPro=App\ProductoModel::FindOrFail($id);
        $eliminarPro->delete();
        return redirect('manipularPro')->with('guardado','Producto eliminado exitosamente');
    }

    public function editarPro($id)//carga datos
    {
        $categoria=App\CategoriaModel::All();
        $editar=App\ProductoModel::FindOrFail($id);
        return view('actualizarPro',compact('editar'), compact('categoria'));
    }

    public function editarProducto(Request $datos)//me edita definitivo los datos
    {
        $datos->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
            'imagen'=>'required',
            'stock'=>'required',
            'precio'=>'required',

        ]);
        $ruta= Storage::disk('public')->put('Producto', $datos->file('imagen'));
        $ruta2= asset($ruta);
        $insPro= App\ProductoModel::FindOrFail($datos->id);      
        $insPro->nombre= $datos->nombre;
        $insPro->descripcion= $datos->descripcion;
        $insPro->imagen=$ruta2;
        $insPro->codigo_categoria= $datos->codigo_categoria;
        $insPro->stock= $datos->stock;
        $insPro->precio= $datos->precio;
        $insPro->update();
        return redirect('manipularPro')->with('guardado','Producto editado exitosamente');
    }


}



