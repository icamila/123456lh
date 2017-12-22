@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <a href="{{route('home')}}">
    <i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
  </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Mi perfil</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre', $usuario->nombre) }}" required autofocus readonly>

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('rut') ? ' has-error' : '' }}">
                            <label for="rut" class="col-md-4 control-label">Rut</label>

                            <div class="col-md-6">
                                <input id="rut" type="text" class="form-control" name="rut" value="{{ old('rut', $usuario->rut) }}" required readonly>

                                @if ($errors->has('rut'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rut') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('fechaNacimiento') ? ' has-error' : '' }}">
                            <label for="fechaNacimiento" class="col-md-4 control-label">Fecha de Nacimiento</label>

                            <div class="col-md-6">
                                <input id="fechaNacimiento" type="date" class="form-control" name="fechaNacimiento" value="{{ old('fechaNacimiento', $usuario->fechaNacimiento) }}" readonly >

                                @if ($errors->has('fechaNacimiento'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fechaNacimiento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('aPaterno') ? ' has-error' : '' }}">
                            <label for="aPaterno" class="col-md-4 control-label">Apellido Paterno</label>

                            <div class="col-md-6">
                                <input id="aPaterno" type="text" class="form-control" name="aPaterno" value="{{ old('aPaterno', $usuario->aPaterno) }}" required readonly>

                                @if ($errors->has('aPaterno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('aPaterno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('aMaterno') ? ' has-error' : '' }}">
                            <label for="aMaterno" class="col-md-4 control-label">Apellido Materno</label>

                            <div class="col-md-6">
                                <input id="aMaterno" type="text" class="form-control" name="aMaterno" value="{{ old('aMaterno', $usuario->aMaterno) }}" required readonly>

                                @if ($errors->has('aMaterno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('aMaterno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo electronico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email', $usuario->email) }}" required readonly>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div style='display:none;'>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
