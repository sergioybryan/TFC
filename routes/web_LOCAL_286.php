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

//Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin/productos', 'AdminProductosController');

Route::get('/admin/productos/destroy/{id}/{nombre}', 'AdminProductosController@confirmDestroy');

Route::get('/admin/productos/categoria/{categoria}', 'AdminProductosController@categoria');

