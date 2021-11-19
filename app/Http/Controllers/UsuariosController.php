<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;
class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $usuario=new Usuarios;

        $usuario->primer_nombre=$request->primer_nombre;
        $usuario->segundo_nombre=$request->segundo_nombre;
        $usuario->tercer_nombre=$request->tercer_nombre;

        $usuario->primer_apellido=$request->primer_apellido;
        $usuario->segundo_apellido=$request->segundo_apellido;

        $usuario->direccion=$request->direccion;
        $usuario->email=$request->email;
        $usuario->telefono=$request->telefono;

        


        $usuario->save();
    }

    public function cargarlistausuario(){

        

    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $usuario=Usuarios::findOrFail($id);

        return view ("donacion.create",compact("usuario"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
