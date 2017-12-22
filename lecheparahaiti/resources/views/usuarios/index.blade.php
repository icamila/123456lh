@extends('layouts/app')
@section('content')
<div class="container">
  <div class="row">
    <a href="{{route('home')}}">
    <i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
  </div>
  <div class="row">
    @include('layouts/mensaje')
    <div class="text-center col-sm-6 col-md-3 top-buffer">
      <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#registro">
        <i class="fa fa-plus-square" aria-hidden="true"></i> Registrar Usuario
      </button>
    </div>
    <div class="col-md-offset-4 col-sm-5 top-buffer">
      <form action="#" method="GET">
        <div class="input-group">
           <input type="text" class="form-control" placeholder="Buscar" id="txtSearch"/>
           <div class="input-group-btn">
                <button class="btn btn-primary" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
                </button>
           </div>
        </div>
      </form>
    </div>
  </div></br>
  <div class="row">
    <div class="col-md-9">
    <table class="table">
      <tr class="info">
        <th>Rut</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Nacimiento</th>
      </tr>
      @foreach($usuarios as $usuario)
      <tr>
        <td>{{$usuario->rut}}</td>
        <td>{{$usuario->full_name}}</td>
        <td>{{$usuario->email}}</td>
        <td>{{$usuario->fechaNacimiento}}</td>
      </tr>
      @endforeach
    </table>
  </div>
  </div>
</div>

@include('usuarios/nuevo')

@endsection
