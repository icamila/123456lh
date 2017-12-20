@extends('layouts/app')
@section('content')
<div class="container">
  <div class="row">
    <div class="text-center col-sm-6 col-md-3 top-buffer">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registro">
        <i class="fa fa-plus-square" aria-hidden="true"></i> Registrar Enfermedad
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
        <th>Nombre</th>
        <th>Observacion</th>
        <th>Opciones</th>
      </tr>
      @foreach($enfermedades as $enfermedad)
      <tr>
        <td>{{$enfermedad->nombre}}</td>
        <td>{{$enfermedad->observacion}}</td>
        <td>
          <i class="fa fa-eye" aria-hidden="true" data-toggle="tooltip" title="VER"></i>
          <a href="#">Ver</a>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
  </div>
</div>

<!-- Modal -->
<div id="registro" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Registro de Enfermedad</h4>
      </div>
      <!-- Modal Body -->
      <div class="modal-body">
        <form class="form-horizontal" role="form" action="{{route('medicamento.store')}}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label  class="col-sm-2 control-label" for="nombre">Nombre</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="nombre" name="nombre" autofocus/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="observacion" >Observacion</label>
            <div class="col-sm-8">
                <textarea class="form-control" id="observacion" name="observacion"></textarea>
              </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12 text-center">
              <button type="submit" class="btn btn-primary">Registrar</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>
@endsection
