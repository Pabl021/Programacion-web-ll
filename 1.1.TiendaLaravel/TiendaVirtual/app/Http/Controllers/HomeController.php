<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        $idLog=auth()->user()->id;
        $cantPro=App\CarritoModel::Where('compra', true)->get();
        $total= App\CarritoModel::Where('compra', true)->sum('monto');
        $user=App\User::All();

        return view('home', compact('user','total','cantPro'));
       
    }

}
