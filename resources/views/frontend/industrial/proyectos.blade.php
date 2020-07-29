@extends('frontend.layouts.app')


@section('content')
<div class="row justify-content-center proyects align-items-center">
    <div class="col-10 text-center">
        <h4 class="bold text-white text-uppercase">
            Nuestros Proyectos
        </h4>
    </div>
</div>
<div class="row justify-content-center pt-5 bg3">

    <div class="nav flex-column nav-pills col-10 col-lg-3 text-center bg3" id="v-proyects-tab" role="tablist"
        aria-orientation="vertical">
        @foreach ($aplications as $a)
        <a class="nav-link {{ $loop->first ? 'active' : '' }} border-0" id="{{ 'v-pills-home-tab'.$a->name  }}"
            data-toggle="pill" href="{{ '#v-pills-'.$a->name }}" role="tab" aria-controls="{{ 'v-pills-'. $a->name }}"
            aria-selected="true">{{ ucFirst($a->display_name) }}</a>
        @endforeach
        <a href="{{ route('front.industrial.contacto') }}" class="btn btn-lg bg1 text-white">
            Contactanos
        </a>

    </div>

    <div class="tab-content col pt-5 bg-white" id="v-pills-tabContent">
        @foreach ($aplications as $a)
        <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" id="{{ 'v-pills-'.$a->name }}" role="
            tabpanel" aria-labelledby="{{ 'v-pills-home-tab'.$a->name  }}">
            <div class="container">

                @foreach ($a->proyects->chunk(2) as $c => $pt)
                <div class="row">
                    @foreach ($pt as $p)

                    <div class="col-10 col-lg-6">
                        <div class="row">
                            <div class="col-6">
                                <img src="{{ asset('img/as.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-6">
                                <small>Junio 2018</small> <br>
                                <h6>{{ $p->name }}</h6>
                                <button class="btn bg1 text-white">Ficha Técnica</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-10 col-lg-6">
                        <div class="row">
                            <div class="col-6">
                                <img src="{{ asset('img/as.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-6">
                                <small>Junio 2018</small> <br>
                                <h6>Aeropuerto de la ciudad de puebla</h6>
                                <button class="btn bg1 text-white">Ficha Técnica</button>
                            </div>
                        </div>
                    </div>


                    @endforeach

                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="row py-3"></div>

@endsection