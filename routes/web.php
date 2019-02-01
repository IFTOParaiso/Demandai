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

Route::get('cadastrar-usuario/{tipo_usuario}', 'UsersController@cadastrarUsuario')->name('cadastrar-usuario');
Route::get('listar-usuario/propi', 'UsersController@index')->middleware('propi')->name('listar-usuario-pesquisador');
Route::get('listar-usuario/pesquisador', 'UsersController@pesquisador')->middleware('auth')->name('listar-usuario-pesquisador');

Route::get('editar-usuario/edit/{id}', 'UsersController@edit')->middleware('auth')->name('editar-usuario');
Route::put('editar-usuario/update/{id}', 'UsersController@update')->middleware('auth');
Route::get('detalhe-pesquisador/show/{id}', 'UsersController@show')->middleware('auth')->name('detalhe-pesquisador');
Route::post('pesquisador/registrar', 'UsersController@store')->name('registrar-pesquisador');
Route::get('login/{tipo_usuario}', 'UsersController@showFormLogin')->name('login-usuario');
Route::get('meu-perfil', 'UsersController@meuPerfil')->middleware('auth')->name('perfil-usuario');
Route::get('areas-pesquisa', 'AreasController@index')->middleware('auth')->name('areas-pesquisa');
Route::get('detalhes-areas-pesquisa/show/{id}', 'AreasController@show')->middleware('auth')->name('detalhes-areas-pesquisa');
Route::get('list-instituicoes', 'InstitutionsController@index')->middleware('auth')->name('listar-instituicoes');
Route::get('detalhes-instituicoes/show/{id}', 'InstitutionsController@show')->middleware('auth');
Route::get('cadastrar-edital', 'PublishesController@cadastrarEdital')->middleware('propi')->name('cadastrar-edital');
Route::post('cadastrar-edital/store', 'PublishesController@store')->middleware('propi')->name('cadastrar-edital');
Route::post('editar-edital/update/{id}', 'PublishesController@update')->middleware('propi')->name('atualizar-edital');
Route::get('editar-edital/edit/{id}', 'PublishesController@edit')->middleware('propi')->name('editar-edital');
Route::put('deletar-edital/delete/{id}', 'PublishesController@destroy')->middleware('propi')->name('deletar-edital');
Route::get('detalhe-edital/show/{id}', 'PublishesController@show')->middleware('auth')->name('detalhe-edital');
Route::get('interesse/{interesse}/publish/{publish_id}/{url}', 'PublishesController@interesse')->middleware('auth')->name('detalhe-edital');
Route::get('listar-edital', 'PublishesController@index')->middleware('auth')->name('listar-edital');
Route::get('areas/{idBigArea}', 'AreasController@listarAreas')->name('listar-areas');
Route::get('listar-interessados-edital/{areas}', 'PublishesController@listarInteressadosEdital')->middleware('auth')->name('listar-interessados');
Route::get('areas-edital/{id}', 'PublishesController@areasEdital')->middleware('auth')->name('listar-areas');
Route::get('editar-senha/{id}', 'UsersController@showFormEditPassword')->name('edit-password');
Route::post('atualizar-senha/{id}', 'UsersController@updatePassword')->name('update-password');
