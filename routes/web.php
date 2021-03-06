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

Route::get('/master',function (){
    return view ('layouts.master');
});

Route::get('/empresas', 'EmpresasController@index');

Route::get('/empresas/create', 'EmpresasController@create');


Route::get('/empresas/{empresa}', 'EmpresasController@show');

Route::post('/empresas', 'EmpresasController@store');


Route::get('/empresas/{empresa}/edit', 'EmpresasController@edit');


Route::put('/empresas/{empresa}', 'EmpresasController@update');

Route::delete('/empresas/{empresa}', 'EmpresasController@destroy');