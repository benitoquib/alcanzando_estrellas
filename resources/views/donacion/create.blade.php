@extends('layouts.app2')

@section('content') 
    <header id="header" class="ex-header2">
    </header> <!-- end of ex-header -->
  @if(Session::has('Mensaje'))
      <div class="alert alert-success" role="alert">
          {{Session::get('Mensaje')}}
      </div>
  @endif
<!-- contact -->
    <div class="form-2" id="contact">
      <div class="container">
      <div class="inner-sec">
        <h3 class="heading text-capitalize mb-4">Detalles<span></span></h3>
        <form name="contact-form" class="contact-form" method="post" action="{{url('/donacion')}}" data-toggle="validator" data-focus="false" files="true" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6 con-gd">
              <div class="form-group">
                <p>Nombre</p>
                <input name="usuario_id" style='display:none;' value="{{$usuario->id}}">
                <input type="text" class="form-control" value="{{$usuario->primer_nombre}}&nbsp;{{$usuario->segundo_nombre}}&nbsp;{{$usuario->primer_apellido}}&nbsp;{{$usuario->segundo_apellido}}" disabled="">
              </div>
              <div class="form-group">
                <p>Email</p>
                <input type="email" class="form-control" value="{{$usuario->email}}" disabled="">
              </div>

              <div class="form-group">
                <p>Direccion</p>
                <input type="address" class="form-control" value="{{$usuario->direccion}}" disabled="">
              </div>
            </div>

            <div class="col-md-6 con-gd">
              <div class="form-group">
                <p>No. Boleta</p>
                <input type="number" class="form-control" id="numero_boleta" name="numero_boleta" required>
              </div>
              <div class="form-group">
                <p>Monto</p>
                <input type="number" class="form-control" id="monto" name="monto" required="">
              </div>
              <div class="form-group">
                <p>Comentario</p>
                <textarea name="comentario" class="form-control" placeholder="Escriba su mensaje" required=""></textarea>
              </div>
              <div class="form-group">
                <p>Comprobante</p>
                <label for="comprobante"></label>
                <input type="file" class="form-control-file" id="comprobante" name="comprobante">
              </div>
              
            </div>
          </div>
          {{csrf_field()}}
          <div class="form-group mb-0">
            <button type="submit" class="form-control-submit-button">Enviar</button>
          </div>
        </form>
      </div>
      </div>
    </div>
    <!-- contact -->
@endsection
