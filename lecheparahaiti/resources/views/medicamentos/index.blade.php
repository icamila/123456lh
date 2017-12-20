@extends('layouts/app')
@section('content')
<div class="container">
  <div class="row">
    @include('layouts/mensaje') 
    <div class="text-center col-sm-6 col-md-3 top-buffer">
      <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#registro">
        <i class="fa fa-plus-square" aria-hidden="true"></i> Registrar Medicamento
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
        <th>Observación</th>
        <th class="text-center">Opciones</th>
      </tr>
      @foreach($medicamentos as $medicamento)
      <tr>
        <td>{{$medicamento->nombre}}</td>
        <td>{{$medicamento->observacion}}</td>
        <td class="text-center">
          
          <form action="{{ route('medicamento.destroy' , $medicamento->id) }}" method="POST">
            <a href="#" class="btn btn-info open-modal btn-sm" role="button" name="{{$medicamento->id}}">
              <i class="fa fa-edit" aria-hidden="true"></i> Editar 
            </a>
              {{ csrf_field() }}
              {{ method_field('DELETE') }}
              <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i> </span> Eliminar</button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
  </div>
</div>

@include('medicamentos/nuevo')
@include('medicamentos/editar')

<!-- para la ruta -->
<input type="hidden" id="ruta" value="{{route('medicamento.index')}}"/>
@endsection
