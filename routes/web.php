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
    return view('welcome');
});
Route::get('/administrador', 'Administrador\HomeController@index')->name('administrador.index');
//Rutas de administrador de usuarios
Route::get('/administrador/usuarios', 'Administrador\UserController@index')->name('administrador.usuarios.index');
Route::get('/administrador/usuarios/create', 'Administrador\UserController@create')->name('nuevo.usuario');
Route::post('/administrador/usuarios/store', 'Administrador\UserController@store')->name('registrar.usuario');



//Rutas de administrador de eventos
Route::get('/administrador/eventos', 'Administrador\EventoController@index')->name('eventos.index');
Route::get('/administrador/eventos/create', 'Administrador\EventoController@create')->name('eventos.create');
Route::get('/administrador/eventos/{evento}/edit', 'Administrador\EventoController@edit')->name('eventos.edit');
Route::post('/administrador/eventos/store', 'Administrador\EventoController@store')->name('eventos.store');
Route::put('/administrador/eventos/{evento}', 'Administrador\EventoController@update')->name('eventos.update');
Route::get('/administrador/eventos/{evento}', 'Administrador\EventoController@show')->name('eventos.show');

Route::delete('/administrador/eventos/{evento}', 'Administrador\EventoController@delete')->name('eventos.delete');






Route::get('/colaborador', 'Colaborador\HomeController@index')->name('colaborador.index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
