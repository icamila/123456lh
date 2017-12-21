<!-- Modal -->
<div id="registro" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Registro de Usuarios</h4>
      </div>
      <!-- Modal Body -->
      <div class="modal-body">
        <form class="form-horizontal" role="form" action="{{ route('register') }}" method="POST">
          {{ csrf_field() }}

          <div class="form-group">
            <label class="col-sm-2 control-label" for="rut" >Rut</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="rut" name="rut" autofocus placeholder="99.999.999-9" tabindex=1/>
            </div>
            <label class="col-sm-2 control-label" for="email" >Correo</label>
            <div class="col-sm-4">
                <input type="email" class="form-control" id="email" name="email" tabindex=6/>
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-2 control-label" for="nombre">Nombre</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="nombre" name="nombre" tabindex=2/>
            </div>
            <label class="col-sm-2 control-label" for="password" >Contraseña</label>
            <div class="col-sm-4">
                <input type="password" class="form-control" id="password" name="password" tabindex=7/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="aPaterno" >Apellido Paterno</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="aPaterno" name="aPaterno" tabindex=3/>
            </div>
            <label class="col-sm-2 control-label" for="password-confirm" >Confirmar Contraseña</label>
            <div class="col-sm-4">
                <input type="password" class="form-control" id="password-confirm" name="password_confirmation" tabindex=8/>
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-2 control-label" for="aMaterno">Apellido Materno</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="aMaterno" name="aMaterno" tabindex=4/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="fechaNacimiento" >Fecha de nacimiento</label>
            <div class="col-sm-4">
                <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" tabindex=5/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12 text-center">
              <button type="submit" class="btn btn-primary" tabindex=9>Registrar</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>