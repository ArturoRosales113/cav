@extends('frontend.layoutsR.app')
@section('content')
<div class="row mt-5 py-5 justify-content-center subtitle">
    <div class="col col-lg-10 text-center text-white py-5">
        <h5 class="bold text-uppercase">Nuestros servicios</h5>
        <h6>OFRECEMOS AYUDA CON EXPERIENCIA INTEGRAL PARA UNA AMPLIA GAA DE NECESIDADES DE NEGOCIO</h6>
    </div>
</div>

<div class="row justify-content-center py-5">
    <div class="col-10 text-dark">
        <div class="row">
            <div class="col-10 col-lg-6 py-3">
                <div class="row py-2">
                    <div class="col-3 p-0">
                        <img src="{{ asset('img/espec.png') }}"  class="img-fluid" alt="">
                    </div>
                    <div class="col">
                        <h6 class="bold text'uppercase">Asesoría</h6>
                        <small>
                            Ofrecemos apoyo de la mano de profesionales, quienes
                            están capacitados por plantas a nivel mundial para ayudar
                            a ofrecer soluciones para todo tipo de proyecto, cumpliendo
                            con lo más altos estándares: americanos, y europeos
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-10 col-lg-6 py-3">
                <div class="row py-2">
                    <div class="col-3 p-0">
                        <img src="{{ asset('img/insta.png') }}"  class="img-fluid" alt="">
                    </div>
                    <div class="col">
                        <h6 class="bold text'uppercase'">Asesoría Técnica</h6>
                        <small>
                            Contamos asesoría tecnita para todos nuestros productos y
                            servicios, por medio de nuestros medios de comunicación y
                            puntos de venta.
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-10 col-lg-6 py-3">
                <div class="row py-2">
                    <div class="col-3 p-0">
                        <img src="{{ asset('img/venta.png') }}"  class="img-fluid" alt="">
                    </div>
                    <div class="col">
                        <h6 class="bold">VENTA</h6>
                        <small>
                            Proveemos de soluciones que se adecuan a cada cliente y
                            cada tipo de acceso del cual requieran, no importando si
                            es una: residencia, hotel, hospital, hotel, industria, con
                            todo lo necesario para su correcta solución.
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-10 col-lg-6 py-3">
                <div class="row py-2">
                    <div class="col-3 p-0">
                        <img src="{{ asset('img/poli.png') }}"  class="img-fluid" alt="">
                    </div>
                    <div class="col">
                        <h6 class="bold text-uppercase">Cursos</h6>
                        <small>
                            Ofrecemos cursos y capasitaciónes como la mano de obra para
                            que sus puertas estén óptimas condiciones, una vez después de
                            instalado sus productos y que estos siempre funcionen.
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
