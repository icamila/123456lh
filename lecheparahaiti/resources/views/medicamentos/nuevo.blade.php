<!-- Modal -->
<div id="registro" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Registro de Medicamento</h4>
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