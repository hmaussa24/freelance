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
Route::resource('/nuevo-proyecto', 'ProyectoController');

Route::get('/nueva-propuesta/{id}', 'PropuestaController@index');
Route::post('/enviar-propuesta/{id}', 'PropuestaController@store');
Route::get('/mis-proyectos', 'ProyectoController@misProyectos');
Route::get('/mis-propuestas', 'PropuestaController@misPropuestas');
Route::get('/propuestas-mis-proyectos/{id}', 'PropuestaController@propuestasMisProyectos');
Route::get('/completa-perfil', 'UsuarioController@index');
Route::post('/enviar-perfil', 'UsuarioController@completarPerfil');



