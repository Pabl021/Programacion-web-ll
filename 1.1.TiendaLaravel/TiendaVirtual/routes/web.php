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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cliente', 'ClienteController@index')->name('cliente');

Route::get('/categoria', 'CategoriaController@index')->name('categoria');

Route::get('/manipular', 'CategoriaController@index1')->name('manipular');

Route::get('eliminar/{id}', 'CategoriaController@eliminarCat')->name('eliCat');

Route::get('editar/{id}', 'CategoriaController@editarCat')->name('ediCat');//me carga datos
Route::post('actualizarCat', 'CategoriaController@editarCategoria')->name('editarCategoria');//me edita los datos


Route::post('categoria', 'CategoriaController@insertarCategoria')->name('insertarCategoria');

