@extends('frontend.layouts.app')


@section('content')
<div class="row">
    <div class="col">
        <img src="{{ asset('img/as.jpg') }}" class="img-fluid" alt="">
    </div>
</div>
<div class="row">
    <div class="col-lg-3">
        <ul class="list-group">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>

          <a href="{{ route('front.contacto') }}" class="">
              Contactanos
          </a>
    </div>
    <div class="col-lg-9">

    </div>
</div>
@endsection
