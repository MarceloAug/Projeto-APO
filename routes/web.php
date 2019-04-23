<?php


//login
Route::get('/login','LoginController@form');
Route::get('/login/register','LoginController@form_register');
Route::post('/login/autentificar','LoginController@login');

//usuarios 
Route::get('/usuarios/adicionar','usersController@form_adicionar');
Route::get('/usuarios/listar','usersController@list');
Route::post('/users/insert','usersController@insert');




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
