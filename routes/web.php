<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/administrador', 'Adminitrador\HomeController@index')->name('administrador.index');
Route::get('/administrador/usuarios', 'Administrador\UserController@index')->name('administrador.usuarios.index');
Route::get('/administrador/usuarios/create', 'Administrador\UserController@create')->name('nuevo.usuario');
Route::post('/administrador/usuarios/store', 'Administrador\UserController@store')->name('registrar.usuario');

Route::get('/colaborador', 'Colaborador\HomeController@index')->name('colaborador.index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
