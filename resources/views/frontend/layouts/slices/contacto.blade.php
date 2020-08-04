<section id="contact-form-container">
  <div class="row justify-content-center align-items-center py-5 my-5">
    <div class="col-lg-6 order-2 order-lg-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.319425724176!2d-96.89731388544286!3d19.527895242687535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85db32214292397f%3A0x261ced91a1e42879!2sRSVP%20Boutique%20%26%20Arte%20Antiguo!5e0!3m2!1ses-419!2smx!4v1578727174576!5m2!1ses-419!2smx" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div> 
    <div class="col-lg-6 order-1 order-lg-2">
        <div class="row justify-content-center py-5">
          <div class="col-10 col-lg-8">
            <form class="" action="{{ route('front.create_message') }}" method="POST">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" placeholder="Nombre">
                @if ($errors->has('nombre'))
                <span class="help-block">
                     <small class="text-danger">{{ $errors->first('nombre') }}</small>
                 </span>
                @endif
              </div>
               <div class="form-group">
                  <input type="text" class="form-control"  name="email" value="{{ old('email') }}" placeholder="nombre@ejemplo.com">
                  @if ($errors->has('email'))
                  <span class="help-block">
                       <small class="text-danger">{{ $errors->first('email') }}</small>
                   </span>
                  @endif
               </div>
               <div class="form-group">
                  <textarea class="form-control" name="mensaje" placeholder="Mensaje" aria-valuema="{{ old('mensaje') }}" rows="4">{{ old('mensaje') }}</textarea>
                  @if ($errors->has('mensaje'))
                  <span class="help-block">
                       <small class="text-danger">{{ $errors->first('mensaje') }}</small>
                   </span>
                  @endif
               </div>
               <div class="w-100 text-right">
                <button type="submit" class="rsvp-button">Enviar mensaje</button>
               </div>
             </form>
          </div>
        </div>
    </div>   
  </div>
</section>
