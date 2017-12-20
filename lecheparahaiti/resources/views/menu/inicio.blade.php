@extends('layouts/app')
@section('content')
<div class="container">
  <div class="row">
    <!-- item -->
    <div class="col-sm-6 col-md-4 text-center">
        <div class="panel panel-default panel-menu">
            <div class="panel-heading">
                <i class="fa fa-child text-danger"></i>
                <h3>Pacientes</h3>
            </div>
            <div class="panel-footer">
                <a class="btn btn-lg btn-block btn-primary" href='{{ route('paciente.index') }}'><i class="fa fa-caret-square-o-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <!-- /item -->
    <!-- item -->
    <div class="col-sm-6 col-md-4 text-center">
        <div class="panel panel-default panel-menu">
            <div class="panel-heading">
                <i class="fa fa-medkit text-danger"></i>
                <h3>Medicamentos</h3>
            </div>
            <div class="panel-footer">
                <a class="btn btn-lg btn-block btn-primary " href='{{ route('medicamento.index') }}'><i class="fa fa-caret-square-o-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <!-- /item -->
    <!-- item -->
    <div class="col-sm-6 col-md-4 text-center">
        <div class="panel panel-default panel-menu">
            <div class="panel-heading">
                <i class="fa fa-stethoscope text-danger"></i>
                <h3>Enfermedades</h3>
            </div>
            <div class="panel-footer">
                <a class="btn btn-lg btn-block btn-primary" href="#">Ingresar</a>
            </div>
        </div>
    </div>
    <!-- /item -->
    <!-- item -->
    <div class="col-sm-6 col-md-4 text-center">
        <div class="panel panel-default panel-menu">
            <div class="panel-heading">
                <i class="fa fa-file text-danger"></i>
                <h3>Informes</h3>
            </div>
            <div class="panel-footer">
                <a class="btn btn-lg btn-block btn-primary" href="#">Ingresar</a>
            </div>
        </div>
    </div>
    <!-- /item -->
    <!-- item -->
    <div class="col-sm-6 col-md-4 text-center">
        <div class="panel panel-default panel-menu">
            <div class="panel-heading">
                <i class="fa fa-edit text-danger"></i>
                <h3>Registro</h3>
            </div>
            <div class="panel-footer">
                <a class="btn btn-lg btn-block btn-primary" href="#">Ingresar</a>
            </div>
        </div>
    </div>
    <!-- /item -->
    <!-- item -->
    <div class="col-sm-6 col-md-4 text-center">
        <div class="panel panel-default panel-menu">
            <div class="panel-heading">
                <i class="fa fa-users text-danger"></i>
                <h3>Perfiles</h3>
            </div>
            <div class="panel-footer">
                <a class="btn btn-lg btn-block btn-primary" href="#">Ingresar</a>
            </div>
        </div>
    </div>
    <!-- /item -->

  </div>
</div>
@endsection
