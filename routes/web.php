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
Route::get('listar-usuario/{tipo_usuario}', 'UsersController@index')->middleware('auth')->name('listar-usuario');
Route::post('pesquisador/registrar', 'UsersController@store')->name('registrar-pesquisador');
Route::get('login/{tipo_usuario}', 'UsersController@login')->name('login-usuario');

Route::get('cadastrar-edital', 'PublishesController@cadastrarEdital')->name('cadastrar-edital');
Route::post('cadastrar-edital/store', 'PublishesController@store')->name('cadastrar-edital');
Route::put('editar-edital/update/{id}', 'PublishesController@update')->name('editar-edital');
Route::put('editar-edital/edit/{id}', 'PublishesController@edit')->name('editar-edital');
Route::put('deletar-edital/delete/{id}', 'PublishesController@destroy')->name('deletar-edital');

Route::get('listar-edital', 'PublishesController@index')->name('listrar-edital');
Route::get('areas/{idBigArea}', 'AreasController@listarAreas')->name('listar-areas');

Route::get('listar-interessados-edital/{areas}', 'PublishesController@listarInteressadosEdital')->name('listar-interessados');
