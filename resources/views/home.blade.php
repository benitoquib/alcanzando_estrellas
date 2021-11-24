@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Donaciones') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Listado de donaciones!') }}

                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Donador</th>
                          <th scope="col">Fecha</th>
                          <th scope="col">No. boleta</th>
                          <th scope="col">Monto</th>
                          <th scope="col">Comentario</th>
                          <th scope="col">Comprobante</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($donaciones as $donacion)
                        <tr>
                          <th scope="row">{{$donacion->id}}</th>
                          <td><a class="btn btn-primary" href="{{route('userdonador', $donacion->usuario_id)}}" role="button">Ver donador</a></td>
                          <td>{{$donacion->fecha}}</td>
                          <td>{{$donacion->numero_boleta}}</td>
                          <td>{{$donacion->monto}}</td>
                          <td>{{$donacion->comentario}}</td>
                          <td><a href="files/{{$donacion->comprobante}}"><img src="files/{{$donacion->comprobante}}" width="150" /></a></td>                    
                        </tr>                        
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
