<?php

use App\adm;
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
Route::get('formulario', function() {
    return view('formulario');
});

Route::get('show', 'UsuarioController@show');
Route::post('tratar', 'UsuarioController@tratar');

Route::resource('usuarios', 'usuariosController');

Route::get('banco', function() {
    //$dados = DB::table('clientes')->get();
    $dados = adm::get();
    return $dados[0]->nome;
});
Route::resource('noticia', 'NoticiaController');