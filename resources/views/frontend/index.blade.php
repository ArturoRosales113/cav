@extends('frontend.layouts.app')



@section('page_banner')
    @include('frontend.layouts.slices.banner', ['banners' => $fam->banners])
@endsection


@section('content')
<section class=""> 
    @if ($fam->articles()->exists()  ||  $fam->articles->count() > 3 )
    <div class="row justify-content-center py-5">
        <div class="col-10">
            <h3 class="bold text-dark text-center">
                Productos fam
            </h3>
            <div class="row py-2">
                @foreach ($fam->articles->where('is_trend','==', 1) as $aa)
                <div class="col-6 col-lg-3 text-center">
                    <a href="{{ route('front.producto', [$fam->display_name,$aa -> slug]) }}">
                        <img src="{{ $aa->pics()->count() > 0 ? asset($aa->pics()->first()->path) : asset('img/brand/no_img_found.png') }}"
                            class="img-fluid" alt="">
                    </a>
                    <a href="{{ route('front.producto', [$fam->display_name,$aa -> slug]) }}" class="btn btn-sm">
                        <small class="text-dark">{{ $aa->name }}</small>
                    </a>
                </div>
                @endforeach
       
            </div>
        </div>
    </div>
    @endif
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
        </div>
    </div>
    <div class="row justify-content-around align-items-center py-lg-3">
        <div class="col-5 col-lg">
            <img src="{{ asset('img/partners/part1.png') }}" class="img-fluid">
        </div>
        <div class="col-5 col-lg">
            <img src="{{ asset('img/partners/part2.png') }}" class="img-fluid">
        </div>
        <div class="col-5 col-lg">
            <img src="{{ asset('img/partners/part3.png') }}" class="img-fluid">
        </div>
        <div class="col-5 col-lg">
            <img src="{{ asset('img/partners/part4.png') }}" class="img-fluid">
        </div>
        <div class="col-5 col-lg">
            <img src="{{ asset('img/partners/part5.png') }}" class="img-fluid">
        </div>
        <div class="col-5 col-lg">
            <img src="{{ asset('img/partners/part6.png') }}" class="img-fluid">
        </div>
        <div class="col-5 col-lg">
            <img src="{{ asset('img/partners/part7.png') }}" class="img-fluid">
        </div>
        <div class="col-5 col-lg">
            <img src="{{ asset('img/partners/part8.png') }}" class="img-fluid">
        </div>
        <div class="col-5 col-lg">
            <img src="{{ asset('img/partners/part9.png') }}" class="img-fluid">
        </div>
    </div>
</section>
@endsection