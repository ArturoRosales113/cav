@extends('backend.layouts.app')
@section('content')
@include('backend.layouts.navbars.nav_expand')
<div class="row justify-content-center align-items-center" style="height:100vh;">
  <div class="col-md-12">
    <div class="row justify-content-center align-items-center py-5">
      <div class="col-lg-11">
        <div class="row">
          <div class="col-lg-8">
            <h2>
                Bienvenido <br>
                <small> {{ Auth::user()->name }}</small>
            </h2>
            <div class="row justify-content-start">
                <a href="{{ route('app.navsettings') }}" class="btn btn-link-secondary">
                  <i class="fas fa-object-group"></i>&nbsp;Menu
                </a>
                <a href="{{ route('app.settings') }}" class="btn btn-link-secondary">
                  <i class="fas fa-cogs"></i>&nbsp;Ajustes
                </a>
              </div>
          </div>
        </div>
        <div class="row justify-content-center">


          <div class="col-lg-4">
            <div class="card">
              <div class="card-body p-0">
                <div class="row">
                  <div class="col">
                    <img src="{{ asset('img/dashboard/mensajes.jpg') }}" alt="">
                  </div>
                  <div class="col-lg-12 text-lg-center">
                    <a href="{{ route('mensaje.index') }}">

                      <h4 class="bold"><i class="fa fa-envelope"></i>&nbsp;Mensajes</h4>
                    </a>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card ">
              <div class="card-body p-0">
                <div class="row">
                  <div class="col">
                    <img src="{{ asset('img/dashboard/citas.jpg') }}" alt="">
                  </div>
                  <div class="col-lg-12 text-lg-center">
                    <a href="{{ route('cita.index') }}">

                      <h4 class="bold"><i class="fa fa-calendar-alt"></i>&nbsp;Citas</h4>
                    </a>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card p-0">
              <div class="card-body p-0">
                <div class="row">
                  <div class="col">
                    <img src="{{ asset('img/dashboard/suscripciones.jpg') }}" alt="">
                  </div>
                  <div class="col-lg-12 text-lg-center">
                    <a href="{{ route('mensaje.index') }}">
                      <h4 class="bold"><i class="fa fa-users"></i>&nbsp;Suscripciones</h4>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 @include('backend.layouts.footers.footer')
@endsection
