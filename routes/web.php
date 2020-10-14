<?php

use Illuminate\Support\Facades\Auth;
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


// inicio
Route::get('/','InicioController@index')->name('inicio.index');

// biblioteca
Route::get('/biblioteca', 'BibliotecaController@index')->name('biblioteca.index');

// admin
Route::get('/admin', 'AdminController@index')->name('admin.index');

// admin novedades
Route::get('/admin/novedadesCrear', 'NovedadesController@create')->name('novedades.create');
Route::get('admin/novedades', 'NovedadesController@index')->name('novedades.index');
Route::post('admin', 'NovedadesController@store')->name('novedades.store');
Route::delete('/novedades/{novedad}', 'NovedadesController@destroy')->name('novedades.destroy');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
