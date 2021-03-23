<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <link rel="shortcut icon" href="{{asset('fav.png')}}">
    <title> Puertas automáticas de veracruz </title>
    <!-- Estilos -->
    @include('frontend.layouts.styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"
        integrity="sha512-C8Movfk6DU/H5PzarG0+Dv9MA9IZzvmQpO/3cIlGIflmtY3vIud07myMu4M/NTPJl8jmZtt/4mC9bAioMZBBdA=="
        crossorigin="anonymous" />
</head>

<body>
    <div class="container-fluid">
        <div class="fixed-top bg2">
            <img src="{{ asset('img/logos/logo_chevron.png') }}" height="40px" alt="">
        </div>
        <div class="row justify-content-center bg2 pt-4">
            <div class="col-12 p-0">
                <div class="video-container">
                    <iframe type="text/html" src="https://www.youtube.com/embed/Wz-EBPyUwKk?autoplay=1&mute=1" autoplay
                        frameborder="0" allow="autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="row justify-content-center pt-4" id="pav-welcome">
            <div class="col-12 col-lg-8 text-center">
                <img src="{{ asset('img/brand/scroll-down.gif') }}" height="100px" class="d-none d-lg-inline-block"
                    alt=""><br>
                <img src="{{ asset('img/logos/logo1.png') }}" alt="">
                <h1 class="bold">PARA ZONAS RESIDENCIALES
                    E INDUSTRIALES</h1>
            </div>
            <div class="col-12 col-lg-11 text-center pt-5">
                @foreach ($families as $fam)
                <a href="{{ route('front.index', $fam->name) }}"
                    class="pav-pill red bold sp2">{{ ucfirst($fam->display_name) }}</a>
                <div class="row justify-content-center align-items-stretch py-5 no-gutters">

                    <div class="col-2 col-lg-1 text-center shadow-sm">
                        <div class="row justify-content-center align-items-center h-75">
                            <button class="btn btn-link p-0 button-carousel-welcome prev" data-family="{{ $fam->name }}" id="destacadosNextBtn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13.904" height="13.903" viewBox="0 0 13.904 13.903">
                                    <g id="Flecha" transform="translate(13.904 13.903) rotate(180)">
                                      <path id="Trazado_22" data-name="Trazado 22" d="M594.986,932.294l-3.476-3.476-3.476-3.476h-6.952l3.476,3.476,3.476,3.476h0l-3.475,3.476-3.476,3.476h6.952l3.476-3.476,3.476-3.476h0" transform="translate(-581.082 -925.342)" fill="#707070"/>
                                    </g>
                                </svg>                              
                            </button>
                        </div>
                    </div>

                    <div class="col-8 col-lg-10">
                        <div class="owl-carousel" id="carousel-{{ $fam->name  }}">
                            @foreach ($fam->categories as $cat)
                            <div class="welcome-img-link">
                                <a
                                    href="{{ route('front.productos.categoria',['family' => $fam->name,'categoryName' => $cat->name]) }}">
                                    <img src="{{ asset($cat->img_path) }}" alt="">
                                    <br>
                                    <span class="text-dark">{{ $cat->display_name }}</span>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-2 col-lg-1 text-center shadow-sm">
                        <div class="row justify-content-center align-items-center h-75">
                            <button class="btn btn-link p-0 button-carousel-welcome next" data-family="{{ $fam->name }}" id="destacadosPrevBtn">

                                <svg xmlns="http://www.w3.org/2000/svg" width="13.904" height="13.903" viewBox="0 0 13.904 13.903">
                                    <path id="Trazado_22" data-name="Trazado 22" d="M594.986,932.294l-3.476-3.476-3.476-3.476h-6.952l3.476,3.476,3.476,3.476h0l-3.475,3.476-3.476,3.476h6.952l3.476-3.476,3.476-3.476h0" transform="translate(-581.082 -925.342)" fill="#707070"/>
                                </svg>                                
                            </button>
                        </div>
                    </div>

                </div>
                @endforeach
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
                        <small class="text-">Aviso de Privacidad Puertas Automáticas de Veracruz</small>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts Generales -->
    @include('frontend.layouts.scripts')
    <!-- Scripts personalizado de la página -->
    @yield('page_scripts')


    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                loop: true,
                touchDrag: true,
                responsive: {
                    // breakpoint from 768 up
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    1023: {
                        items: 4
                    }
                }
            });
            $('.button-carousel-welcome.prev').click(function(e){
                var owlsel = $('#carousel-' + $(this).attr('data-family'));
                owlsel.trigger('next.owl.carousel');
            });
            $('.button-carousel-welcome.next').click(function(e){
                var owlsel = $('#carousel-' + $(this).attr('data-family'));
                owlsel.trigger('prev.owl.carousel', [300]);
            });
        });
    </script>
</body>

</html>