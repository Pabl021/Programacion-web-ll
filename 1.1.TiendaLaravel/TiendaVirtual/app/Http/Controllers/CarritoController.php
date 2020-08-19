<?php

namespace App\Http\Controllers;

use App\CarritoModel;
use Illuminate\Http\Request;
use App;
use Carbon\Carbon;
class CarritoController extends Controller
{
    public function cargarId($id){
        $fecha = Carbon::now();
        $pro=App\ProductoModel::where('id',$id)->get();      
        $ins=new App\CarritoModel;
        $ins->id_Log= auth()->user()->id;
        $ins->id_Pro= $id;
        $ins->nombre= $pro[0]->nombre;
        $ins->cant= 1;
        $ins->monto= $pro[0]->precio*1;
        $ins->compra= false;
        $ins->fecha= $fecha;
        $ins->save();
        return redirect('cliente');       
    }

   public function cargarPro(){
       $idLog=auth()->user()->id;
      $producto=App\CarritoModel::where('id_Log',$idLog)->Where('compra', false)->get()->sortBy('nombre');
      return view('modal',compact('producto'));
   }

   public function eliminarProSel($id){
    $eliminarPro=App\CarritoModel::FindOrFail($id);
    $eliminarPro->delete();
    return redirect('cargarPro');
   }
    
}
