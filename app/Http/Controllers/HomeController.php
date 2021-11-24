<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registrodonacion;
use App\Usuarios;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $usuarios=Usuarios::all();

        $donaciones=Registrodonacion::all();
        return view('home', compact("donaciones", "usuarios"));
    }
}
