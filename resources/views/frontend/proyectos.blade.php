@extends('frontend.layouts.app')


@section('content')
<div class="row justify-content-center proyects align-items-center">
    <div class="col-10 text-center">
        <h4 class="bold text-white text-uppercase">
            Nuestros Proyectos
        </h4>
    </div>
</div>
<div class="row justify-content-center py-5">

    <div class="nav flex-column nav-pills col-10 col-lg-3 text-center" id="v-proyects-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Hospitales</a>
        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Hotel</a>
        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Autoservicio</a>
        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Industria</a>
      </div>

      <div class="tab-content col pt-5" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div class="container">
                <div class="row">
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

                </div>
                <div class="row py-5">
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
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            
        </div>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

        </div>
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">

        </div>
      </div>
</div>
@endsection
