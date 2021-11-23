@extends('layouts.app')
<header id="header" class="ex-header2">
</header> <!-- end of ex-header -->

@section('content') 
    @if(Session::has('Mensaje'))
        <div class="alert alert-success" role="alert">
            {{Session::get('Mensaje')}}
        </div>
    @endif

<div id="formuser" class="form-2">
    <div class="container">

<h1>Siga los pasos por favor</h1>
<h2>Nosotros te guiaremos</h2>

    <div class="card">
      <div class="card-header">
        Donadores
      </div>
      <div class="card-body">
        <h5 class="card-title">En el boton desplegable puede buscar el usuario que le corresponde a su persona</h5>
        <p class="card-text">Si no habia hecho una donacion anteriormente, puede registrar sus datos pulsando el segundo boton</p>

        <div class="btn-group">
          <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Seleccionar usuario
          </button>
          <div class="dropdown-menu">
            @foreach($usuarios as $usuario)
                <a class="dropdown-item" href="{{route('datosusuario', $usuario->id)}}">{{$usuario->primer_nombre}}&nbsp;{{$usuario->segundo_nombre}}&nbsp;{{$usuario->primer_apellido}}</a>
            @endforeach
          </div>
        </div>

        <a href="#registrouser" class="btn btn-primary" data-toggle="modal">No he registrado mis datos</a>
      </div>
    </div>

                        <!-- modal formulario registro user-->

                    <div id="registrouser" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Registro de usuario</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                 </div>
                                <div class="modal-body">

                                    <form method="post" id="registrouserform" data-toggle="validator" data-focus="false" action="/usuarios">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">
                                            Default checkbox
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                          <label class="form-check-label" for="flexCheckChecked">
                                            Checked checkbox
                                          </label>
                                        </div>
                                        <table>
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control-input" id="primer_nombre" name="primer_nombre" required>
                                                        <label class="label-control" for="primer_nombre">Primer Nombre</label>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control-input" id="segundo_nombre" name="segundo_nombre" >
                                                        <label class="label-control" for="segundo_nombre">Segundo Nombre</label>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control-input" id="tercer_nombre" name="tercer_nombre">
                                                        <label class="label-control" for="tercer_nombre">Tercer Nombre</label>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control-input" id="primer_apellido" name="primer_apellido" required>
                                                        <label class="label-control" for="primer_apellido">Primer Apellido</label>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control-input" id="segundo_apellido" name="segundo_apellido">
                                                        <label class="label-control" for="segundo_apellido">Segundo Apellido</label>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control-input" id="email" name="email" required>
                                                        <label class="label-control" for="email">Email</label>
                                                        <div class="help-block with-errors"></div>
                                                    </div>      
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div class="form-group">
                                                        <input type="address" class="form-control-input" id="direccion" name="direccion" required>
                                                        <label class="label-control" for="direccion">Direccion</label>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="fa-phone" class="form-control-input" id="telefono" name="telefono" >
                                                        <label class="label-control" for="telefono">Telefono</label>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </td>
                                            </tr>

                                            {{csrf_field()}}
                                            <tr>
                                                <td colspan="2" align="center">
                                                    <div class="form-group">
                                                        <button type="submit" class="form-control-submit-button">ACEPTAR</button>
                                                    </div>
                                                    <div class="form-message">
                                                        <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                                                    </div>
                                                </td>
                                                <td colspan="1" align="center">
                                                    <div class="form-group">
                                                        <button type="reset" class="btn btn-danger">Borrar</button>
                                                    </div>
                                                    <div class="form-message">
                                                        <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>

                                    </form>


                                </div>
                                <div class="modal-footer">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin modal formulario registro user-->

    </div>
</div>
@endsection