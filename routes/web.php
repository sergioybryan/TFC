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
	
/*	if (Auth::check()){
		$user=Auth::user();
		echo $user;
		if ($user->rol_id==2){
			return redirect('/home');
		} else return redirect('/admin/productos'); 
	}*/

	return view('welcome');
});


Route::get('/telefonia/{c}' , 'HomeController@categoria'); //pasamos por parametro la variable c (categoria) y llamamos al metodo categoria
 
Route::resource('admin/productos', 'AdminProductosController');

Route::resource('/home', 'HomeController')->name('home');

Route::get('/admin/productos/destroy/{id}/{nombre}', 'AdminProductosController@confirmDestroy');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

/*Route::get('/passwords/mail', 'ForgotPasswordController@sendResetLinkEmail');*/

Route::get('/passwords/email', function () {
    return view('email');
});
