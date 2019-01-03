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
//Route::get('editar-usuario/{tipo_usuario}/edit/{id}', 'UsersController@edit')->middleware('auth')->name('editar-usuario');
Route::get('editar-usuario/edit/{id}', 'UsersController@edit')->middleware('auth')->name('editar-usuario');
//Route::put('editar-usuario/{tipo_usuario}/update/{id}', 'UsersController@update')->middleware('auth')->name('editar-usuario');
Route::put('editar-usuario/update/{id}', 'UsersController@update')->middleware('auth');
Route::get('detalhe-pesquisador/show/{id}', 'UsersController@show')->name('detalhe-pesquisador');
Route::post('pesquisador/registrar', 'UsersController@store')->name('registrar-pesquisador');
Route::get('login/{tipo_usuario}', 'UsersController@login')->name('login-usuario');
Route::get('meu-perfil', 'UsersController@meuPerfil')->name('perfil-usuario');

Route::get('cadastrar-edital', 'PublishesController@cadastrarEdital')->name('cadastrar-edital');
Route::post('cadastrar-edital/store', 'PublishesController@store')->name('cadastrar-edital');
Route::post('editar-edital/update/{id}', 'PublishesController@update')->name('atualizar-edital');
Route::get('editar-edital/edit/{id}', 'PublishesController@edit')->name('editar-edital');
Route::put('deletar-edital/delete/{id}', 'PublishesController@destroy')->name('deletar-edital');
Route::get('detalhe-edital/show/{id}', 'PublishesController@show')->name('detalhe-edital');

Route::get('listar-edital', 'PublishesController@index')->name('listrar-edital');
Route::get('areas/{idBigArea}', 'AreasController@listarAreas')->name('listar-areas');

Route::get('listar-interessados-edital/{areas}', 'PublishesController@listarInteressadosEdital')->name('listar-interessados');

Route::get('areas-edital/{id}', 'PublishesController@areasEdital')->name('listar-areas');
