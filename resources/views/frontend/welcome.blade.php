<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <link rel="shortcut icon" href="{{asset('fav.png')}}">
    <title> Puertas automáticas de veracruz </title>
    <!-- Estilos -->
    @include('frontend.layouts.styles')
</head>

<body>
    <div class="container-fluid">
        <div class="fixed-top bg2">
            <img src="{{ asset('img/logos/logo_chevron.png') }}" height="40px" alt="">
        </div>
        <div class="row justify-content-center bg2 pt-4">
            <div class="col-12 col-lg-8 p-0">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.youtube.com/embed/Wz-EBPyUwKk?autoplay=1&loop=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center pt-4" id="pav-welcome">
            <div class="col-8 text-center mt-5">
                <img src="{{ asset('img/logos/logo1.png') }}" alt="">
                <h1 class="bold">PARA ZONAS RESIDENCIALES <br>
                    E INDUSTRIALES</h1>
                <div class="row pt-5">
                    <div class="col-12 col-lg-6 text-center">
                        <a href="{{ route('front.residencial.index') }}" class="btn btn-lg bg1">Residencial</a>
                        <ul class="list-group-flush bg-transparent p-0 mt-4">
                            @foreach ($residencial as $r)
                            <li class="list-group-item bg-transparent">
                                <a href="{{ route('front.industrial.productos.categoria', $r->name) }}"
                                    class="text-dark">
                                    {{ ucFirst($r->display_name) }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-12 col-lg-6 text-center">
                        <a href="{{ route('front.industrial.index') }}" class="btn btn-lg bg1">Industrial</a>
                        <ul class="list-group-flush bg-transparent p-0 mt-4 ">
                            @foreach ($industrial as $i)
                            <li class="list-group-item bg-transparent">
                                <a href="{{ route('front.industrial.productos.categoria', $i->name) }}"
                                    class="text-dark">
                                    {{ ucFirst($i->display_name) }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="fixed-botom">
            <div class="row py-3 justify-content-center">
                <img src="{{ asset('img/front/gh-logo.svg') }}" alt="" class="logo-grupo">
                <img src=" {{ asset('img/front/puertas-logo.svg') }}" alt="" class="logo-grupo">
                {{-- <img src=" {{ asset('img/front/gh-ventanas-logo.svg') }}" alt="" class="logo-grupo"> --}}
            </div>
            <div class=" row bg1 py-2">
                <div class="col text-center">
                    <a href="{{ route('privacidad') }}" class="btn btn-link text-white">
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