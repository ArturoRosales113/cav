@extends('frontend.layouts.app')



@section('content')
<div class="row justify-content-center justify-content-center bg3 py-5 mt-5">
    <div class="col-10">
        <div class="row py-5">
            <div class="col-2">
                <img src="{{ asset('img/icons/Puertas automaticas.svg') }}" class="img-fluid" width="50px" alt="">
                <br>
                Puertas Automaticas
            </div>
            <div class="col-2">
                <img src="{{ asset('img/icons/Rampas mecanicas.svg') }}" class="img-fluid" width="50px" alt="">
                <br>
                Rampas Mecanicas
            </div>
            <div class="col-2">
                <img src="{{ asset('img/icons/sellos.svg') }}" class="img-fluid" width="50px" alt="">
                <br>
                Sellos
            </div>
            <div class="col-2">
                <img src="{{ asset('img/icons/Puertas rapidas.svg') }}" class="img-fluid" width="50px" alt="">
                <br>
                Puertas rapidas
            </div>
            <div class="col-2">
                <img src="{{ asset('img/icons/Puertas de quirofano.svg') }}" class="img-fluid" width="50px" alt="">
                <br>
                puertas de quirofano
            </div>
            <div class="col-2">
                <img src="{{ asset('img/icons/Control de acceso.svg') }}" class="img-fluid" width="50px" alt="">
                <br>
                Control de acceso
            </div>
            <div class="col-2">
                <img src="{{ asset('img/icons/Control de acceso.svg') }}" class="img-fluid" width="50px" alt="">
                <br>
                Cortinas de acero
            </div>
            <div class="col-2">
                <img src="{{ asset('img/icons/seleccional.svg') }}" class="img-fluid" width="50px" alt="">
                <br>
                Puerta seccional
            </div>
            <div class="col-2">
                <img src="{{ asset('img/icons/Puera acero.svg') }}" class="img-fluid" width="50px" alt="">
                <br>
                Puertas de acero
            </div>
            <div class="col-2">
                <img src="{{ asset('img/icons/Barreras vehiculares.svg') }}" class="img-fluid" width="50px" alt="">
                <br>
                Barreras vehiculares
            </div>
            <div class="col-2">
                <img src="{{ asset('img/icons/Motores industiales.svg') }}" class="img-fluid" width="50px" alt="">
                <br>
                Motores industriales
            </div>
            <div class="col-2">
                <img src="{{ asset('img/icons/') }}" class="img-fluid" width="50px" alt="">
                <br>
                Ver mas
            </div>
        </div>
    </div>
</div>
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

<div class="row justify-content-center py-5">
    <div class="col-10">
        <div class="row">
            <div class="col-3 text-center">
                <img src="http://lorempixel.com/600/600/technics/" alt="" class="img-fluid">
                <h6>Lorem, ipsum dolor.</h6>
            </div>
            <div class="col-3 text-center">
                <img src="http://lorempixel.com/600/600/technics/" alt="" class="img-fluid">
                <h6>Lorem, ipsum dolor.</h6>
            </div>
            <div class="col-3 text-center">
                <img src="http://lorempixel.com/600/600/technics/" alt="" class="img-fluid">
                <h6>Lorem, ipsum dolor.</h6>
            </div>
            <div class="col-3 text-center">
                <img src="http://lorempixel.com/600/600/technics/" alt="" class="img-fluid">
                <h6>Lorem, ipsum dolor.</h6>
            </div>
        </div>
    </div>
</div>

<div class="row py-5 productos-text justify-content-center align-items-center">
    <div class="col-10 col-lg-8 p-0 text-dark py-3 text-center">
        <h5 class="bold">OFRECEMOS AYUDA CON EXPERIENCIA INTEGRAL PARA UNA AMPLIA GAMA DE NECESIDADES DE NEGOCIO</h5>
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
       <div class="row justify-content-around p-3">
           <img src="{{ asset('img/front/Logos.png') }}" width="40px">
           <img src="{{ asset('img/front/Logos_1.png') }}" width="40px">
           <img src="{{ asset('img/front/Logos_2.png') }}" width="40px">
           <img src="{{ asset('img/front/Logos_3.png') }}" width="40px">
           <img src="{{ asset('img/front/Logos_4.png') }}" width="40px">
           <img src="{{ asset('img/front/Logos_5.png') }}" width="40px">
           <img src="{{ asset('img/front/Logos_6.png') }}" width="40px">
           <img src="{{ asset('img/front/Logos_8.png') }}" width="40px">
       </div>
    </div>
</div>
@endsection
