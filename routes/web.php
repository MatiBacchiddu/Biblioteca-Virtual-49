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

// contenidos
Route::get('/inicio/contenidos', 'ContenidosController@index')->name('contenidos.index');
Route::get('/descargar/{contenido}', 'ContenidosController@download');
Route::get('/materias/seleccion', 'ContenidosController@seleccion')->name('contenidos.seleccion');

// admin
Route::get('/admin', 'AdminController@index')->name('admin.index');

// admin novedades
Route::get('/admin/novedadesCrear', 'NovedadesController@create')->name('novedades.create');
Route::get('admin/novedades', 'NovedadesController@index')->name('novedades.index');
Route::post('admin', 'NovedadesController@store')->name('novedades.store');
Route::delete('/novedades/{novedad}', 'NovedadesController@destroy')->name('novedades.destroy');


// buscador materias
Route::get('/buscar', 'ContenidosController@search')->name('buscar.show');

// materiasAdmin
Route::get('/admin/materias', 'MateriasAdminController@index')->name('materiasAdmin.index');
Route::get('/admin/materiasCrear', 'MateriasAdminController@create')->name('materiasAdmin.create');
Route::post('materiasAdmin', 'MateriasAdminController@store')->name('materiasAdmin.store');


// admin contenidos
Route::get('/admin/contenidos', 'ContenidosAdminController@create')->name('contenidosAdmin.create');
Route::get('/admin/contenidosTodos', 'ContenidosAdminController@index')->name('contenidosAdmin.index');
Route::post('contenidosAdmin', 'ContenidosAdminController@store')->name('contenidosAdmin.store');
Route::delete('/contenidos/{contenido}', 'ContenidosAdminController@destroy')->name('contenidosAdmin.destroy');


// Admin Historia
Route::get('admin/historiaCrear', 'HistoriaController@create')->name('historiaAdmin.create');
Route::get('/admin/historia', 'HistoriaController@index')->name('historiaAdmin.index');
Route::post('historia', 'HistoriaController@store')->name('historiaAdmin.store');
Route::get('/historias/{historia}/edit', 'HistoriaController@edit')->name('historiaAdmin.edit');
Route::put('/historias/{historia}', 'HistoriaController@update')->name('historia.update');
Route::delete('/historias/{historia}', 'HistoriaController@destroy')->name('historiaAdmin.destroy');

// admin Directiva
Route::get('/admin/directiva', 'DirectivaController@index')->name('directivaAdmin.index');
Route::get('/admin/directivaCrear', 'DirectivaController@create')->name('directivaAdmin.create');
Route::post('directivos', 'DirectivaController@store')->name('directivaAdmin.store');
Route::delete('/directivos/{directivo}', 'DirectivaController@destroy')->name('directivaAdmin.destroy');

// admin Biblioteca
Route::get('/admin/biblioteca', 'BibliotecaController@index')->name('bibliotecaAdmin.index');
Route::get('/admin/biblioteca/crear', 'BibliotecaController@create')->name('bibliotecaAdmin.create');
Route::post('bibliotecaAdmin', 'BibliotecaController@store')->name('bibliotecaAdmin.store');
Route::delete('/admin/biblioteca/{biblioteca}', 'BibliotecaController@destroy')->name('bibliotecaAdmin.destroy');


Route::get('/biblioteca', 'Bibliotecainicio@index')->name('biblioteca.index');

// materias
Route::get('/materias/{materia}', 'MateriaController@show')->name('materias.show');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
