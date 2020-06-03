<?php

use Illuminate\Support\Facades\Route;
use App\User;



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
	
	$user = User::where('name','admin') -> first();

	if ($user==null){
   User::create([
		'name' => "admin",
		'email' => "admin@gmail.com",
		'password' => Hash::make(12345678),
		'rol_id' => 1,
	]);
	}
	return view('welcome');
})->name("welcome");


Route::get('/telefonia/{c}' , 'HomeController@categoria'); //pasamos por parametro la variable c (categoria) y llamamos al metodo categoria

Route::get('/informatica/{c}' , 'HomeController@categoria');

Route::get('/imagen/{c}' , 'HomeController@categoria');

Route::get('/videojuegos/{c}' , 'HomeController@categoria');

Route::get('/hogar/{c}' , 'HomeController@categoria');

Route::resource('admin/productos', 'AdminProductosController')->middleware('auth');;//si no ha iniciado sesion te reenvia a la pagina de login

Route::resource('/home', 'HomeController');

Route::get('inicio', 'HomeController@index')->name("home");

Route::get('/admin/productos/destroy/{id}/{nombre}', 'AdminProductosController@confirmDestroy');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

/*Route::get('/passwords/mail', 'ForgotPasswordController@sendResetLinkEmail');*/

Route::get('/passwords/email', function () {
    return view('email');
});


Route::get('logout', 'Auth\LoginController@logout');



