<?php


//login
Route::get('/login','LoginController@form');
Route::get('/login/register','LoginController@form_register');
Route::post('/login/autentificar','LoginController@login');
Route::post('/login/insert','LoginController@insert');
Route::get('/logout','LoginController@logout');


//usuarios 
Route::get('/usuarios/adicionar','usersController@form_adicionar');
Route::get('/usuarios/listar','usersController@list');
Route::post('/users/insert','usersController@insert');



///pousadas
Route::get('/pousadas/adicionar','PousadasController@form_adicionar');
Route::post('/pousadas/insert','PousadasController@insert');
Route::get('/pousadas/lista','PousadasController@list');
Route::get('/pousadas/remove/{id}', 'PousadasController@delete');
Route::get('/pousadas/display/{id}', 'PousadasController@display');
Route::get('/pousadas/FormUpdate/{id}','PousadasController@form_update');
Route::post('/pousadas/update', 'PousadasController@update');
Route::get('/pousadas/filtra', 'PousadasController@filter');


Route::get('/index', 'SiteController@index');






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
