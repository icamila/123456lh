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
Route::get('/usuario/perfil', 'UsuarioController@editar')->name('usuario.perfil');
Route::resource('/usuario', 'UsuarioController');
Route::resource('/paciente', 'PacienteController');
Route::resource('/medicamento', 'MedicamentoController');
Route::resource('/enfermedad', 'EnfermedadController');
Route::resource('/medicamento', 'MedicamentoController');
