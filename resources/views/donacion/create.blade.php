<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Ayudar es vivir</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="{{asset('css/style_regdon.css')}}" rel="stylesheet">
  <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontawesome-all.css')}}" rel="stylesheet">
    <link href="{{asset('css/swiper.css')}}" rel="stylesheet">
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('css/theme.css')}}" rel="stylesheet">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="form-2">
<div class="container">
  <div class="row">
    <div class="wrapper">
      <ul class="steps">
        <li class="is-active">Paso 1</li>
        <li>Paso 2</li>
        <li>Paso 3</li>
      </ul>
      <form class="form-wrapper" >
        <fieldset class="section is-active" >
          <h3>Detalles</h3>
          <table>
            <tr>
              <h4>{{$usuario->primer_nombre}}&nbsp;{{$usuario->segundo_nombre}}&nbsp;{{$usuario->primer_apellido}}&nbsp;{{$usuario->segundo_apellido}}</h4>
            </tr>
          </table>
          <b>Mostrar datos completos</b>
                        <input type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent()" />
                        <div id="content" style="display: none;" >

                          <div class="form-group">
                              <input type="email" class="form-control-input" id="email" name="email" required>
                              <label class="label-control" for="email">{{$usuario->email}}</label>
                          </div>      
                          <div class="form-group">
                              <input type="address" class="form-control-input" id="direccion" name="direccion" required>
                              <label class="label-control" for="direccion">{{$usuario->direccion}}</label>
                              <div class="help-block with-errors"></div>
                          </div>
                          <div class="form-group">
                              <input type="fa-phone" class="form-control-input" id="telefono" name="telefono" >
                              <label class="label-control" for="telefono">{{$usuario->telefono}}</label>
                              <div class="help-block with-errors"></div>
                          </div>
    
                        </div>
                        <div>
                                    <div class="form-group">
                                        <input type="fa-phone" class="form-control-input" id="numero_boleta" name="numero_boleta" >
                                        <label class="label-control" for="numero_boleta">No. de la boleta</label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                          
                                <td>
                                    <div class="form-group">
                                        <input type="fa-phone" class="form-control-input" id="monto" name="monto" >
                                        <label class="label-control" for="monto">Monto</label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                           
                                <td colspan="2">
                                    <div class="form-group">
                                        <textarea class="form-control-textarea" id="comentario"></textarea>
                                        <label class="label-control" for="comentario">Comentario</label>
                                        <div class="help-block with-errors"></div>
                                    </div> 
                             
                                <div class="form-group">
                                    <label for="comprobante"></label>
                                    <input type="file" class="form-control-file" id="comprobante">
                                </div>
                    
                            
                            {{csrf_field()}}

                            <table>
                              <tr>
                                <td>
                                <div class="form-group">

                                        <button type="submit" class="form-control-submit-button">ACEPTAR</button>
                                    </div>
                                    <div class="form-message">
                                        <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                                    </div>
                                </td>
                                <td>
                                  <div class="form-group">
                                        <button type="reset" class="btn btn-danger">Borrar</button>
                                    </div>
                                    <div class="form-message">
                                        <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                                    </div>
                                </td>
                              </tr>   
                            </table>

                                    
                                
                        </div>
          <div class="button">Next</div>
        </fieldset>
        <fieldset class="section">
          <h3>Account Type</h3>
          <div class="row cf">
            <div class="four col">
              <input type="radio" name="r1" id="r1" checked>
              <label for="r1">
                <h4>Designer</h4>
              </label>
            </div>
            <div class="four col">
              <input type="radio" name="r1" id="r2"><label for="r2">
                <h4>Developer</h4>
              </label>
            </div>
            <div class="four col">
              <input type="radio" name="r1" id="r3"><label for="r3">
                <h4>Project Manager</h4>
              </label>
            </div>
          </div>
          <div class="button">Next</div>
        </fieldset>
        <fieldset class="section">
          <h3>Choose a Password</h3>
          <input type="password" name="password" id="password" placeholder="Password">
          <input type="password" name="password2" id="password2" placeholder="Re-enter Password">
          <input class="submit button" type="submit" value="Sign Up">
        </fieldset>
        <fieldset class="section">
          <h3>Account Created!</h3>
          <p>Your account has now been created.</p>
          <div class="button">Reset Form</div>
        </fieldset>
      </form>
    </div>
    </div>
  </div>
  </div>
<!-- partial -->
    <script src="{{asset('js/jquery.min.js')}}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{asset('js/popper.min.js')}}"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
    <script src="{{asset('js/jquery.easing.min.js')}}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{asset('js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{asset('js/jquery.magnific-popup.js')}}"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{asset('js/morphext.min.js')}}"></script> <!-- Morphtext rotating text in the header -->
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script> <!-- Isotope for filter -->
    <script src="{{asset('js/validator.min.js')}}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{asset('js/scripts.js')}}"></script> <!-- Custom scripts -->

    <script src="{{asset('js/radioformularios.js')}}"></script> <!-- Custom scripts -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
  <script src="{{asset('js/script_regdon.js')}}"></script>

</body>
</html>
