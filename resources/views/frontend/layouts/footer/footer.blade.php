<footer class="text-white">
 <div class="row align-items-center py-5 justify-content-center bg2">
   <div class="col-md-6 col-lg-4 text-center">
    <img src="{{ asset('img/logos/logob.png') }}" alt="" class="img-fluid my-4">
    <h4 class="font2">Síguenos en</h4>
    <div class="row justify-content-center py-3">

      {{-- @foreach ($settings->rss as $r)
        @if($r->url != '')
        <a class="btn btn-link text-white" href="{{ $r->url }}" target="_blank">
          <i class="{{ $r->icon }}"></i>
        </a>
        @endif
      @endforeach --}}

    </div>
   </div>
   <div class="w-100"></div>
   {{-- <div class="col-lg-4 text-center">
     <h6 class="text-white">Av. Araucarias #252 Col. Sahop Xalapa, Veracruz.</h6>
     <a href="tel:2286036651" class="text-white btn btn-link">
       <h5 class="text-white">
         <small><i class="fa fa-phone"></i></small>
         &nbsp;228&nbsp;603&nbsp;6651
       </h5>
    </a>
   </div> --}}
   <div class="w-100"></div>
   <div class="col-lg-6">
    {{-- <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link text-white" href="{{ route('front.index') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{ route('front.agenda') }}">¡Agenda Tu Cita!</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{ route('front.nosotros') }}">Nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{ route('front.contacto') }}">Ubicación</a>
      </li>
    </ul> --}}
   </div>
 </div>
</footer>
