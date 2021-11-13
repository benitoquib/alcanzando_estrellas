<?php

use Illuminate\Support\Facades\Route;
use App\Usuarios;

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

Route::get('/', "PaginasControlador@inicio");
Route::get('/inicio', "PaginasControlador@inicio");
Route::get('/registrarDonacion', "PaginasControlador@registrodonacion");
Route::get('/historia',"PaginasControlador@historia");
Route::get('/apoyar',"PaginasControlador@apoyo");
Route::get('/acerca',"PaginasControlador@acerca");

Route::get('/usuarios/create',"UsuariosController@create");

Route::get('/leer',function(){
	$usuarios = Usuarios::All();
	foreach ($usuarios as $usuario) {
		echo $usuario->primer_nombre ;
		echo $usuario->primer_apellido . "<br>";
	}

});


Route::get('/insertarusuario',function(){
	$usuario=new Usuarios;
	$usuario->primer_nombre="Beneq";
	$usuario->segundo_nombre="doobdo";
	$usuario->tercer_nombre="";
	$usuario->primer_apellido="Quibc";
	$usuario->segundo_apellido="";
	$usuario->direccion="chamelco";
	$usuario->email="bquib@gmail";
	$usuario->telefono="24353212";

	$usuario->save();
});

Route::get('/actualizarusuario',function(){
	$usuario=Usuarios::find(2);
	$usuario->primer_nombre="Beneq";
	$usuario->segundo_nombre="sasss";
	$usuario->tercer_nombre="";
	$usuario->primer_apellido="Quibc";
	$usuario->segundo_apellido="";
	$usuario->direccion="chamelco";
	$usuario->email="bquib@gmail";
	$usuario->telefono="24353212";

	$usuario->save();
});

Route::get('/borrarusuario',function(){
	$usuario=Usuarios::find(2);
	$usuario->delete();
});

Route::get('/usuariosdonacion',function(){
	$donaciones=Usuarios::find(1)->registrodonacion;
	foreach ($donaciones as $donacion) {
		echo $donacion->fecha;
		echo $donacion->numero_boleta;
	}
});
