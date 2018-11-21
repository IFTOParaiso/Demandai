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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//=====================ROTAS_PESQUISADOR================================================================================

Route::get('cadastrar-usuario/{tipo_usuario}', 'UsersController@cadastrarUsuario')->name('cadastrar-usuario');
Route::post('pesquisador/registrar', 'UsersController@store')->name('registrar-pesquisador');
Route::get('login/{tipo_usuario}', 'UsersController@login')->name('login-usuario');