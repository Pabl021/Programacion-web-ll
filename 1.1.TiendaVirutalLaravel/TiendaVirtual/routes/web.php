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
    return view('login');
});

Route::get('login','RegistroController@retornar')->name('retornar');


Route::get('registro/', function () {
    return view('registro');
})->name('registro');

Route::post('registro','RegistroController@insertarUsuarios')->name('insertarUsuarios');
   

