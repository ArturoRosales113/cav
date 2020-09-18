<div class="modal fade" id="subscriberModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content bg1">
        <div class="modal-body">
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="text-white bold">
            Suscríbete <br> <small>A nuestro newsletter</small>
          </h5>
          <hr>
          <form action="{{ route('front.mensaje.create') }}" method="POST" class="form">
            {{ csrf_field() }}
            <input type="hidden" name="interes" value="newsletter">
            <div class="form-group">
              <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" placeholder="Nombre">
              @if ($errors->has('nombre'))
              <span class="help-block">
                   <small class="text-danger">{{ $errors->first('nombre') }}</small>
               </span>
              @endif
            </div>
             <div class="form-group">
                <input type="text" class="form-control"  name="correo" value="{{ old('email') }}" placeholder="nombre@ejemplo.com">
                @if ($errors->has('email'))
                <span class="help-block">
                     <small class="text-danger">{{ $errors->first('email') }}</small>
                 </span>
                @endif
             </div>
             <div class="form-group">
               <button type="submit" class="btn btn-sm bg2 text-white">
                Suscribirme
               </button>
             </div>
          </form>
        </div>
      </div>
    </div>
</div>