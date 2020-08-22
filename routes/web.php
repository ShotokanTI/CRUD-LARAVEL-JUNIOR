<?php

use Illuminate\Support\Facades\Route;

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
	return view('home');
});

Auth::routes();

//alteracoes gitdsfvadfa
//dfsafdfs
//Route::get('/homeAjax', 'srfwfrewfrcontratoTela@index')->name('homeAjax');
// //Auth::routes();

//Route::get('/contratoTela', 'contratoController@index')->name('contratoTela');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::get('home', 'contratoController@index')->name('home');
Route::post('homeAjax/exibir', 'contratoController@exibir')->name('homeAjax/exibir');
Route::post('homeAjax/exibirDelete','contratoController@exibirDelete')->name('homeAjax/exibirDelete');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('backEstados','contratoController@backEstados')->name('backEstados');
Route::get('backCidades/{id}','contratoController@backCidadesByEstado')->name('backCidades');
Route::post('search', 'contratoController@show')->name('search');
Route::post('homeAjax/updateTable','contratoController@updateTable')->name('homeAjax/updateTable');
Route::resource('homeAjax', 'contratoController');
