@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="/home">{{ __('<< Regresar') }}</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Detalle donador') }}
                    <br>
                    <form  id="userform"  data-focus="false" >
                        <table>
                          
                            <tr>
                                <td>
                                    <div class="form-group">   
                                      <p>Primer nombre</p>                                   
                                        <input type="text" class="form-control-input" value="{{$usuario->primer_nombre}}" disabled="">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                      <p>Segundo nombre</p>
                                        <input type="text" class="form-control-input" value="{{$usuario->segundo_nombre}}" disabled="">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                      <p>Tercer nombre</p>
                                        <input type="text" class="form-control-input" value="{{$usuario->tercer_nombre}}" disabled="">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                      <p>Primer Apellido</p>
                                        <input type="text" class="form-control-input" value="{{$usuario->primer_apellido}}" disabled="">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                      <p>Segundo apellido</p>
                                        <input type="text" class="form-control-input" value="{{$usuario->segundo_apellido}}" disabled="">
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="2">
                                    <div class="form-group">
                                      <p>Correo electronico</p>
                                        <input type="text" class="form-control-input" value="{{$usuario->email}}" disabled="">
                                    </div>      
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="2">
                                    <div class="form-group">
                                      <p>Direccion</p>
                                        <input type="text" class="form-control-input" value="{{$usuario->direccion}}" disabled="">
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <div class="form-group">
                                      <p>Telefono</p>
                                        <input type="text" class="form-control-input" value="{{$usuario->telefono}}" disabled="">
                                    </div>
                                </td>
                            </tr>
                        </table>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection