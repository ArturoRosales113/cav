@extends('frontend.layouts.app')

@section('page_banner')
<div class="row mt-lg-5 py-lg-5 justify-content-center align-items-center subtitle">
    <div class="col col-lg-10 text-center text-white py-5">
        <h5 class="bold text-uppercase">Nuestros servicios</h5>
        <h6>OFRECEMOS AYUDA CON EXPERIENCIA INTEGRAL PARA UNA AMPLIA GAA DE NECESIDADES DE NEGOCIO</h6>
    </div>
</div>
@endsection

@section('content')
<div class="row justify-content-center py-5">
    <div class="col-11 col-lg-6 py-3">
        <div class="row py-2 align-items-stretch">
            <div class="col-3 p-0">
                <img src="{{ asset('img/espec.png') }}" class="img-fluid" alt="">
            </div>
            <div class="col">
                <h6 class="bold">ESPECIFICACIÓN</h6>
                <small class="text-justify">
                    Ofrecemos apoyo de la mano de profesionales, quienes
                    están capacitados por plantas a nivel mundial para ayudar
                    a ofrecer soluciones para todo tipo de proyecto, cumpliendo
                    con lo más altos estándares: americanos, y europeos
                </small>
            </div>
        </div>
    </div>
    <div class="col-11 col-lg-6 py-3">
        <div class="row py-2 align-items-stretch">
            <div class="col-3 p-0">
                <img src="{{ asset('img/insta.png') }}" class="img-fluid" alt="">
            </div>
            <div class="col">
                <h6 class="bold">INSTALACIÓN</h6>
                <small class="text-justify">
                    Contamos con una flotilla de camiones para una logística
                    propia la cual nos permite dar un mejor servicio para nuestros
                    clientes, así mismo con un cuerpo de técnicos capacitados y
                    que están de base todo el año, evitando así temas como
                    SATIC.
                </small>
            </div>
        </div>
    </div>
    <div class="col-11 col-lg-6 py-3">
        <div class="row py-2 align-items-stretch">
            <div class="col-3 p-0">
                <img src="{{ asset('img/venta.png') }}" class="img-fluid" alt="">
            </div>
            <div class="col">
                <h6 class="bold">VENTA</h6>
                <small class="text-justify">
                    Proveemos de soluciones que se adecuan a cada cliente y
                    cada tipo de acceso del cual requieran, no importando si
                    es una: residencia, hotel, hospital, hotel, industria, con
                    todo lo necesario para su correcta solución
                </small>
            </div>
        </div>
    </div>
    <div class="col-11 col-lg-6 py-3">
        <div class="row py-2 align-items-stretch">
            <div class="col-3 p-0">
                <img src="{{ asset('img/poli.png') }}" class="img-fluid" alt="">
            </div>
            <div class="col">
                <h6 class="bold">PÓLIZAS DE MANTENIMIENTO</h6>
                <small class="text-justify">
                    Ofrecemos la asesoría post-venta necesaria así como la mano
                    de obra para que sus puertas estén óptimas condiciones, una
                    vez después de instalado sus productos y que estos siempre
                    funcionen.
                </small>
            </div>
        </div>
    </div>
</div>
@endsection