<?php

use Illuminate\Support\Facades\Route;
use App\Usuarios;
use App\Http\Controllers\Auth;


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

/*Route::get('/', function(){
	return view('index');
})->name('home');*/
Route::resource('/usuarios', "UsuariosController");
Route::resource('/donacion', "DonacionesController");

Route::get('/', "PaginasControlador@inicio");
Route::get('/inicio', "PaginasControlador@inicio");
Route::get('/registrarDonacion', "UsuariosController@cargarlistausuario");

//Route::get('/registrodonacion/{usuario}', "UsuariosController@show")->name('datosusuario');
Route::get('/registrodonacion', "PaginasControlador@reg")->name('registro');
Route::get('/historia',"PaginasControlador@historia");
Route::get('/apoyar',"PaginasControlador@apoyo");
Route::get('/acerca',"PaginasControlador@acerca");

Route::get('/formulario',"PaginasControlador@prueba");

Route::get('/crear',"UsuariosController@create");
//Route::get('/registro/{usuario}',"PaginasControlador@registro")->name('datosusuario');
Route::get('/registro/{usuario}',"UsuariosController@show")->name('datosusuario');
Route::get('/userdonador/{usuario}',"AdminDonacionescontroller@show")->name('userdonador');



//Auth::routes();
Route::post('/login', 'Auth\LoginController@login');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::post('/password/confirm', 'Auth\ConfirmPasswordController@confirm');
Route::get('/password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');

Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

//Route::post('/register', 'Auth\RegisterController@register');
//Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::get('/home', 'HomeController@index')->name('home');


