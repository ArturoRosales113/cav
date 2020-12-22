@extends('frontend.layouts.app')

@section('page_styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
    integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
    crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"
    integrity="sha512-C8Movfk6DU/H5PzarG0+Dv9MA9IZzvmQpO/3cIlGIflmtY3vIud07myMu4M/NTPJl8jmZtt/4mC9bAioMZBBdA=="
    crossorigin="anonymous" />
@endsection

@section('page_banner')
@include('frontend.layouts.slices.banner', ['banners' => $fam->banners])
@endsection


@section('content')
<section class="">
    @if ($fam->articles()->exists() || $fam->articles->count() > 3 )
    <div class="row justify-content-center py-5">
        <div class="col-10">
            <h3 class="bold text-dark text-center">
                Productos destacados
            </h3>
        </div>
        <div class="col-lg-10">
            <div class="row">
                <div class="owl-carousel">
                    @foreach ($fam->articles->where('is_trend','==', 1) as $aa)

                    <div class="welcome-img-link text-center">
                        <a href="{{ route('front.producto', [$fam->display_name,$aa -> slug]) }}">
                            <img src="{{ $aa->pics()->count() > 0 ? asset($aa->pics()->first()->path) : asset('img/brand/no_img_found.png') }}"
                                class="img-fluid index-product-image" alt="">
                            <small class="text-dark">{{ $aa->name }}</small>
                        </a>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @endif
    <div class="row py-5 productos-text justify-content-center align-items-center">
        <div class="col-10 col-lg-6 p-0 text-white py-3 text-center">
            <h6 class="bold">
                OFRECEMOS AYUDA CON EXPERIENCIA INTEGRAL PARA <br> UNA AMPLIA GAMA DE NECESIDADES DE NEGOCIO
            </h6>
            <br>
            <small>OFRECEMOS APOYO DE LA MANO DE PROFESIONALES, QUIENES ESTÁN CAPACITADOS POR PLANTAS A NIVEL MUNDIAL
                PARA AYUDAR A OFRECER SOLUCIONES PARA TODO TIPO DE PROYECTO, CUMPLIENDO CON LO MÁS
                ALTOS ESTÁNDARES: AMERICANOS, Y EUROPEOS</small>
        </div>
    </div>

    <div class="row justify-content-center py-5">
        <div class="col-12 col-lg-10 text-center p-0">
            <h5 class="bold py-3 text-dark text-uppercase">
                Nuestros Socios Comerciales
            </h5>
        </div>
    </div>
    <div class="row justify-content-around align-items-center py-lg-3">
        <div class="col-lg-10">
            <div class="row">
                <div class="owl-carousel">
                    <img src="{{ asset('img/partners/part1.png') }}" class="img-fluid">
                    <img src="{{ asset('img/partners/part2.png') }}" class="img-fluid">
                    <img src="{{ asset('img/partners/part3.png') }}" class="img-fluid">
                    <img src="{{ asset('img/partners/part4.png') }}" class="img-fluid">
                    <img src="{{ asset('img/partners/part5.png') }}" class="img-fluid">
                    <img src="{{ asset('img/partners/part6.png') }}" class="img-fluid">
                    <img src="{{ asset('img/partners/part7.png') }}" class="img-fluid">
                    <img src="{{ asset('img/partners/part8.png') }}" class="img-fluid">
                    <img src="{{ asset('img/partners/part9.png') }}" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('page_scripts')
<script>
    $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                loop: true,
                touchDrag: true,
                autoplay:true,
                autoplayTimeout:2000,
                autoplayHoverPause:false,
                responsive: {
                    // breakpoint from 768 up
                    0: {
                        items: 2
                    },
                    768: {
                        items: 2
                    },
                    1023: {
                        items: 4
                    }
                }
            });
        });
    $(document).ready(function() {
            var owl = $('.owl-carousel-2');
            owl.owlCarousel({
                loop: true,
                touchDrag: true,
                autoplay:true,
                autoplayTimeout:2000,
                autoplayHoverPause:false,
                responsive: {
                    // breakpoint from 768 up
                    0: {
                        items: 2
                    },
                    768: {
                        items: 2
                    },
                    1023: {
                        items: 5
                    }
                }
            });
        });
</script>
@endsection