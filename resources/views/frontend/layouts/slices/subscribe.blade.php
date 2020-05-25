<section id="newsletterContainer">
  <div class="row justify-content-center">
    <div class="col-10 col-lg-8 p-0" id="newsletterParallax">
      <a href="{{ route('front.agenda') }}">
        <img src="{{ asset('img/slides/banner-promociones.jpg') }}" alt="" class="img-fluid w-100">
      </a>
    </div>
    <div class="col-12" id="newsletterFormContainer">
      <div class="row justify-content-center h-100 align-items-end py-5">
        <div class="col-10 col-md-6 col-lg-4">
          <h5 class="text-center text-white"><small>Regístrate para</small></h5>
          <h1 class="text-center text-white">            
            <span class="font2">recibir promociones</span>
          </h1>
          <form action="{{ route('front.create_suscription') }}" method="POST" class="form">
            {{ csrf_field() }}
            <div class="input-group mb-3">
              <input name="suscriber_email" value="{{ old('suscriber_email') }}" type="text" class="form-control" placeholder="E-mail" aria-label="Correo electrónico" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-secondary" type="submit" id="button-addon2">Enviar</button>
              </div>
            </div>
            @if ($errors->has('suscriber_email'))
            <span class="help-block">
                 <strong class="text-white">{{ $errors->first('suscriber_email') }}</strong>
             </span>
            @endif
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
