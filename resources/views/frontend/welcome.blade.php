<!DOCTYPE html>
<html lang="es" dir="ltr">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
  <link rel="shortcut icon" href="{{asset('img/logos/fav.png')}}">
  <title> {{ config('APP_NAME') }} | @yield('page_title')  </title>
 <!-- Estilos -->
    @include('frontend.layouts.styles')
 </head>
 <body>
    <div class="container-fluid">
        <div class="fixed-top bg2">
            <img src="{{ asset('img/logos/logo_chevron.png') }}" height="40px" alt="">
        </div>
        <div class="row justify-content-center align-items-center" id="pav-welcome">
            <div class="col-8 text-center">
                <img src="{{ asset('img/logos/logo1.png') }}" alt="">
                <h1 class="bold">PARA ZONAS RECIDENCIALES <br>
                    E INDUSTRIALES</h1>
                <div class="row pt-5">
                    <div class="col-12 col-lg-6 text-center">
                        <a href="{{ route('front.residencial.index') }}" class="btn btn-lg bg1">Residencial</a>
                        <ul class="list-group-flush bg-transparent p-0 mt-4">
                            <li class="list-group-item bg-transparent">Cras justo odio</li>
                            <li class="list-group-item bg-transparent">Dapibus ac facilisis in</li>
                            <li class="list-group-item bg-transparent">Morbi leo risus</li>
                            <li class="list-group-item bg-transparent">Porta ac consectetur ac</li>
                            <li class="list-group-item bg-transparent">Vestibulum at eros</li>
                          </ul>
                    </div>
                    <div class="col-12 col-lg-6 text-center">
                        <a href="{{ route('front.industrial.index') }}" class="btn btn-lg bg1">Industrial</a>
                        <ul class="list-group-flush bg-transparent p-0 mt-4 ">
                            <li class="list-group-item bg-transparent">Cras justo odio</li>
                            <li class="list-group-item bg-transparent">Dapibus ac facilisis in</li>
                            <li class="list-group-item bg-transparent">Morbi leo risus</li>
                            <li class="list-group-item bg-transparent">Porta ac consectetur ac</li>
                            <li class="list-group-item bg-transparent">Vestibulum at eros</li>
                          </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="fixed-botom">
            <div class="row py-3 justify-content-center">
                <img src="{{ asset('img/front/gh-logo.svg') }}" alt="" class="logo-grupo"">
                <img src="{{ asset('img/front/puertas-logo.svg') }}" alt="" class="logo-grupo"">
                <img src="{{ asset('img/front/gh-ventanas-logo.svg') }}" alt="" class="logo-grupo"">
            </div>
            <div class="row bg1 py-2">
                <div class="col text-center">
                    <a href="" class="btn btn-link text-white">
                        <small class="text-">Aviso de Privacidad Puertas Automáticas de veracruz</small>
                    </a>
                </div>
            </div>
        </div>
    </div>

  <!-- Scripts Generales -->
  @include('frontend.layouts.scripts')
  <!-- Scripts personalizado de la página -->
  @yield('page_scripts')
 </body>
</html>