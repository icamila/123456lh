@extends('layouts/app')
@section('content')
<div class="container">
  <div class="row"> 
  @include('layouts/mensaje')   
    <div class="text-center col-sm-6 col-md-3 top-buffer">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registro">
        <i class="fa fa-user-plus" aria-hidden="true"></i> Ingresar nuevo paciente
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
        <th>Apellido Paterno</th>
        <th>Ficha</th>
      </tr>
      @foreach($pacientes as $paciente)
      <tr>
        <td>{{$paciente->nombre}}</td>
        <td>{{$paciente->aPaterno}}</td>
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
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Registro de paciente</h4>
      </div>
      <!-- Modal Body -->
      <div class="modal-body">
        <form class="form-horizontal" role="form" action="{{route('paciente.store')}}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label  class="col-sm-2 control-label" for="nombre">Nombre</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="nombre" name="nombre" autofocus/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="aPaterno" >Apellido Paterno</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="aPaterno" name="aPaterno" />
            </div>
            <label class="col-sm-3 control-label" for="fechaNacimiento" >Fecha de nacimiento</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento"/>
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-2 control-label" for="aMaterno">Apellido Materno</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="aMaterno" name="aMaterno"/>
            </div>

            <label  class="col-sm-3 control-label" for="sexo_id">Sexo</label>
            <div class="col-sm-3">
              <label class="radio-inline"><input type="radio" name="sexo_id" value="1">Masculino</label>
              <label class="radio-inline"><input type="radio" name="sexo_id" value="2">Femenino</label>
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
