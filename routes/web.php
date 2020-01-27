<?php

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
    return view('welcome');
});


Route::get('libros/listado', 'LibroController@mostrarTodos')->name('libros.listado');
Route::get('articulos/listado', 'ArticuloController@mostrarTodos')->name('articulos.listado');

Route::resource('libros', 'LibroController');
Route::resource('articulos','ArticuloController');