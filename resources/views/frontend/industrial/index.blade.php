@extends('frontend.layouts.app')



@section('content')
<section class="">

    <div class="row">
        <div class="col-12 p-0">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('img/banner-1.jpg') }}" alt="First slide">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row justify-content-center color1 py-4">
        <a href=""><i class="far fa-dot-circle"></i></a>
        <a href=""><i class="far fa-dot-circle"></i></a>
        <a href=""><i class="far fa-dot-circle"></i></a>
    </div>

    <div class="row justify-content-center py-5">
        <div class="col-10">
            <h3 class="bold text-dark text-center">
                Productos Destacados
            </h3>
            <div class="row py-2">
                @foreach ($destacados->articles->take(4) as $aa)
                <div class="col-6 col-lg-3 text-center">
                    <a href="{{ route('front.industrial.producto', $aa -> slug) }}">
                        <img src="{{ $aa->pics()->count() > 0 ? asset($aa->pics()->first()->path) : asset('img/brand/no_img_found.png') }}"
                            class="img-fluid" alt="">
                    </a>
                    <a href="{{ route('front.industrial.producto', $aa -> slug) }}" class="btn btn-sm">
                        <small class="text-dark">{{ $aa->name }}</small>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="row py-5 productos-text justify-content-center align-items-center">
        <div class="col-10 col-lg-8 p-0 text-dark py-3 text-center">
            <h5 class="bold">OFRECEMOS AYUDA CON EXPERIENCIA INTEGRAL PARA UNA AMPLIA GAMA DE NECESIDADES DE NEGOCIO
            </h5>
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
            <div class="row justify-content-around align-items-center p-3">
                <div class="col-5 col-lg">
                    <img src="{{ asset('img/front/Logos.png') }}" class="img-fluid">
                </div>
                <div class="col-5 col-lg">
                    <img src="{{ asset('img/front/Logos_1.png') }}" class="img-fluid">
                </div>
                <div class="col-5 col-lg">
                    <img src="{{ asset('img/front/Logos_2.png') }}" class="img-fluid">
                </div>
                <div class="col-5 col-lg">
                    <img src="{{ asset('img/front/Logos_3.png') }}" class="img-fluid">
                </div>
                <div class="col-5 col-lg">
                    <img src="{{ asset('img/front/Logos_4.png') }}" class="img-fluid">
                </div>
                <div class="col-5 col-lg">
                    <img src="{{ asset('img/front/Logos_5.png') }}" class="img-fluid">
                </div>
                <div class="col-5 col-lg">
                    <img src="{{ asset('img/front/Logos_6.png') }}" class="img-fluid">
                </div>
                <div class="col-5 col-lg">
                    <img src="{{ asset('img/front/Logos_8.png') }}" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection