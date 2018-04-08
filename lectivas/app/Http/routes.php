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
    return view('welcome');
});


Route::get('aplicasion', function () {
    return view('aplicasion');
});



Route::get('crear', function () {
    return view('lectivas.crearl');
});
Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
Route::post('crearle', 'AppController@crearle');

Route::get('seleccionar', 'AppController@seleccionar');
Route::get('seleccion/{id}', 'AppController@inscribir');
Route::get('eliminar/{id}', 'AppController@eliminar');
Route::get('actualizar/{id}', 'AppController@iractualizar');

Route::post('actualizar/up1/{id_lectiva}', 'AppController@irupdate');
Route::get('alumnos/{id}', 'AppController@iralumnos');