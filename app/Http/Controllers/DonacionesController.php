<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registrodonacion;
use DB;

class DonacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        $donacion = new Registrodonacion;
        
        $donacion->tipodonacion_id=1;
        $donacion->usuario_id=$request->usuario_id;
        $donacion->numero_boleta=$request->numero_boleta;
        $donacion->monto=$request->monto;
        $donacion->comentario=$request->comentario;

        $donacion->save();*/
        try {
            DB::beginTransaction();
            
            $entrada=$request->all();
            if($archivo=$request->file('comprobante')){
                $nombre=$archivo->getClientOriginalName();
                $archivo->move(public_path().'/files/',$nombre);
                $entrada['comprobante']=$nombre;

            }
            Registrodonacion::create($entrada);
            DB::commit();
            return redirect()->route('registro')->with('Mensaje','Datos registrados correctamente');

        } catch (Exception $e) {
            DB::rollback();
            return redirect()->route('registro')->with('Mensaje','Datos no registrados');
        }

        

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
