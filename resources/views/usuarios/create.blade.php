<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Solicitud de contacto</title>
</head>

<body>
	 <form method="post" id="registrouserform" data-toggle="validator" data-focus="false" action="views">
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
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="tercer_nombre" name="tercer_nombre">
                                <label class="label-control" for="tercer_nombre">Tercer Apellido</label>
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

</body>

</html>



