<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Usuarios;

class PaginasControlador extends Controller
{
    //
    public function inicio(){
    	return view('index');
    }
    public function prueba(){
        return view('formularioregistro');
    }

    public function registro(){
        return view('donacion.create');

    } 

    public function historia(){
    	return view('historia');
    }   

    public function apoyo(){
        return view('apoyo');
    }

    public function acerca(){
        return view('acerca');
    }

    public function reg(){
        $usuarios=Usuarios::all();
        return view('registrodonacion', compact("usuarios"));
    }

    
}
