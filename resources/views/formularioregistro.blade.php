@extends('layouts.app')

@section('content')  
    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <div class="section-title">DONACIONES</div>
                        <h2>Llene el formulario para el registro de su donacion</h2>
                        <p>te voy a decir un par de cosas para que lo tengas en la mente, aki to el mundo ama a la gente</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="address"><i class="fas fa-map-marker-alt"></i>4ta Calle 8-40, Zona 3 Cobán, Alta Verapaz</li>
                            <li><i class="fas fa-phone"></i><a href="tel:50277917277">+502 77917277</a></li>
                            <li><i class="fas fa-phone"></i><a href="tel:50241991698">+502 41991698</a></li>
                            <li><i class="fas fa-envelope"></i><a href="mailto:pninez@gmail.com">pninez@gmail.com</a></li>
                        </ul>
                        
                    </div> <!-- end of text-container -->

                    
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <br>
                    
                    <!-- cuadro combinado para seleccionar usuario -->
                        <div class="btn-group">
                          <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Seleccionar usuario
                          </button>
                          <div class="dropdown-menu">
                            @foreach($usuarios as $usuario)
                                <a class="dropdown-item" href="#">{{$usuario->primer_nombre}}&nbsp;{{$usuario->segundo_nombre}}&nbsp;{{$usuario->primer_apellido}}</a>

                            @endforeach
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#registrouser" data-toggle="modal">Registrar usuario</a>
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


                    <form method="post" id="registrodonacionform" data-toggle="validator" data-focus="false" action="usuarios">
                        <!--
                        <div class="form-group" id="opciones">
                        <input type="radio" name="opc" value="1" onchange="mostrar(this.value);">Ya estoy registrado
                        <input type="radio" name="opc" value="2" onchange="mostrar(this.value);">Aun no tengo usuario registrado
                      </div>
                      -->
                        <table>
                            <!--
                            <tr>

                                <select name="tipodonacion" id="tipodonacion">
                                    @foreach($usuarios as $usuario)
                                        <option class="dropdown-item" href="#">{{$usuario->primer_nombre}}&nbsp;{{$usuario->segundo_nombre}}&nbsp;{{$usuario->primer_apellido}}</option>

                                    @endforeach
                                  <option value="r">Rojo</option> 
                                </select>
                            </tr>
                                     -->
                            <tr>
                                <td>
                                    <div class="form-group">
                                        
                                        <label class="label-control" for="">{{$usuario->primer_nombre}}</label>
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
                        </table>
                        <b>Mostrar datos completos</b>
                        <input type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent()" />
                        <table id="content" style="display: none;">
                            
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
                        </table>
                        <table>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="fa-phone" class="form-control-input" id="numero_boleta" name="numero_boleta" >
                                        <label class="label-control" for="numero_boleta">No. de la boleta</label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="fa-phone" class="form-control-input" id="monto" name="monto" >
                                        <label class="label-control" for="monto">Monto</label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="form-group">
                                        <textarea class="form-control-textarea" id="comentario"></textarea>
                                        <label class="label-control" for="comentario">Comentario</label>
                                        <div class="help-block with-errors"></div>
                                    </div> 
                                </td>
                            </tr>
                            
                            <tr>
                                <div class="form-group">
                                    <label for="comprobante">Cargar archivo</label>
                                    <input type="file" class="form-control-file" id="comprobante">
                                </div>
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
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->
@endsection
