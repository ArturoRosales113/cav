<div class="modal fade" id="destroyModal" tabindex="-1" role="dialog" aria-labelledby="destroyModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="destroyModalLabel">Eliminar </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <h5>¿Qué deseas hacer con los productos dentro de <strong id="destroyTitle"></strong> ?</h5>
        <form id="destroyModalForm" action="" method="POST">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="delete" />
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <div class="input-group-text bg-warning text-white">
                <input type="radio" name="transfer" value="true" checked>
                <label class="form-check-label" for="transfer">
                  &nbsp; Transferir a
                </label>
              </div>
            </div>
            <select class="custom-select" name="id" id="destroyModalFormSelect">
              <option value="null">Ninguna (Se agruparán en 'N/A')</option>
              @foreach ($model as $md)
              <option value="{{ $md->id }}">{{ $md->display_name }}</option>
              @endforeach
            </select>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <div class="input-group-text bg-danger text-white">
                <input type="radio" name="transfer" value="false">
                <label class="form-check-label " for="transfer">
                  &nbsp; No transferir
                </label>
              </div>
            </div>
            <span class="input-group-text bg-danger text-white">Los Articulos serán eliminados.</span>

          </div>
          <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
      </div>
    </div>
  </div>
</div>