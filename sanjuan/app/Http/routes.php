<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
   
    return view('auth/login');
});
Route::resource('modulos/users','ControllerUsuario');
Route::resource('modulos/estudiantes','ControllerEstudiante');
Route::resource('modulos/opciones','ControllerOpciones');
Route::resource('modulos/avance','ControllerAvance');
Route::resource('modulos/album','ControllerAlbum');
Route::resource('modulos/animales','ControllerAnimales');

Route::post('modulos/cursos','ControllerCurso@getEstudiante')->name('modulos.cursos.getestudiante');

Route::auth();

Route::get('/home', 'HomeController@index');
