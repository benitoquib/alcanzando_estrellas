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

    public function registrodonacion(){

        $usuarios=Usuarios::all();
    	return view('formularioregistro', compact("usuarios"));

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

    
}
