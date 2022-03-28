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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/usuarios','UsuariosController@index')->name('usuarios');
Route::get('/usuarios/create','UsuariosController@create')->name('usuarios.create');
Route::post('/usuarios/store','UsuariosController@store')->name('usuarios.store');

Route::get('/categoria','CategoriaController@index')->name('categoria'); 
Route::get('/categoria/create','CategoriaController@create')->name('categoria.create');
Route::post('/categoria/store','CategoriaController@store')->name('categoria.store');
Route::get('/categoria/edit/{cat_id}','CategoriaController@edit')->name('categoria.edit');
Route::post('/categoria/update/{cat_id}','CategoriaController@update')->name('categoria.update');
Route::post('/categoria/destroy/{cat_id}','CategoriaController@destroy')->name('categoria.destroy');

Route::get('/tipo','TipoController@index')->name('tipo');
Route::get('/tipo/create','TipoController@create')->name('tipo.create');
Route::post('/tipo/store','TipoController@store')->name('tipo.store');
Route::get('/tipo/edit/{tip_id}','TipoController@edit')->name('tipo.edit');
Route::post('/tipo/update/{tip_id}','TipoController@update')->name('tipo.update');
Route::post('/tipo/destroy/{tip_id}','TipoController@destroy')->name('tipo.destroy');



Route::get('/reg_movimientos','Reg_movimientosController@index')->name('reg_movimientos');
Route::get('/reg_movimientos/create','Reg_movimientosController@create')->name('reg_movimientos.create');
Route::post('/reg_movimientos/store','Reg_movimientosController@store')->name('reg_movimientos.store');
Route::get('/reg_movimientos/edit/{mov_id}','Reg_movimientosController@edit')->name('reg_movimientos.edit');
Route::post('/reg_movimientos/update/{mov_id}','Reg_movimientosController@update')->name('reg_movimientos.update');
Route::post('/reg_movimientos/destroy/{mov_id}','Reg_movimientosController@destroy')->name('reg_movimientos.destroy');
Route::post('7reg_movimientos/search','Reg_movimientosController@index')->name('reg_movimientos.search');