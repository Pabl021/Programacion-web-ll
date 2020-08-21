<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();


//rutas encargadas para el administrador en la parte de categorias
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/categoria', 'CategoriaController@index')->name('categoria');
Route::get('/manipular', 'CategoriaController@index1')->name('manipular');
Route::get('eliminar/{id}', 'CategoriaController@eliminarCat')->name('eliCat');
Route::get('editar/{id}', 'CategoriaController@editarCat')->name('ediCat');//me carga datos
Route::post('actualizarCat', 'CategoriaController@editarCategoria')->name('editarCategoria');//me edita los datos
Route::post('categoria', 'CategoriaController@insertarCategoria')->name('insertarCategoria');

//rutas encargadas para el administrador en la parte de productos
Route::get('/crearPro', 'ProductoController@index')->name('crearPro');//carga la vista
Route::post('/insertarPro', 'ProductoController@insertarPro')->name('insertarPro');
Route::get('/manipularPro', 'ProductoController@index1')->name('manipularPro');
Route::get('eliminarPro/{id}', 'ProductoController@eliminarPro')->name('eliPro');
Route::get('editarPro/{id}', 'ProductoController@editarPro')->name('cargarProEdi');//me carga datos
Route::post('editarPro', 'ProductoController@editarProducto')->name('editarProducto');//me edita los datos

//rutas encargadas para el lo que es la parte del cliente
Route::get('/cliente', 'ClienteController@index')->name('cliente');
Route::get('/estadistica', 'ClienteController@estadistica')->name('estadistica');
Route::get('cargarId/{id}', 'CarritoController@cargarId')->name('cargarId');
Route::get('cargarPro', 'CarritoController@cargarPro')->name('cargarPro');//para que el cliente vea lo que tieneen lista para comprar
Route::get('eliminarProSel/{id}', 'CarritoController@eliminarProSel')->name('eliProSel');
Route::get('productoComprado', 'CarritoController@productoComprado')->name('productoComprado');
Route::get('ordenCompra', 'ClienteController@ordenCompra')->name('ordenCompra');