@extends('frontend.layouts.app')

@section('page_title')
Nosotros
@endsection


@section('content')
<section class="py-5">
    <div class="row pb-5">
        <div class="col-12 p-0">
            <img src="{{ asset('img/nosotros.jpg') }}" alt="" class="img-fluid">
        </div>
    </div>
    <div class="row justify-content-center pb-5">
        <div class="col-10">
            <div class="row">
                <div class="col-7 bg1 nosotros-title">
                    <div class="row justify-content-center py-5">
                        <div class="col-10 py-3">
                            <h1 class="text-white">30 años abriendo <br> puertas</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-end py-5">
        <div class="col-5">
            <h2 class="color1 mb-3">
                Nuestro Compromiso
            </h2>
            <p class="text-justify">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.     
            </p>
            <ul>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </li>
                <li>Quis ipsum suspendisse ultrices gravida.</li>
                <li>Risus commodo viverra maecenas accumsan lacus vel facilisis. </li>
            </ul>
        </div>
        <div class="col-1"></div>
        <div class="col-5 p-0">
            <img src="{{ asset('img/nosotros2.jpg') }}" class="img-fluid" alt="">
        </div>
    </div>

    <div class="row justify-content-start py-5">
        <div class="col-5 p-0">
            <img src="{{ asset('img/nosotros2.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-1"></div>
        <div class="col-5">
            <h2 class="color1 mb-3">
                Misión y Visión
            </h2>
            <p class="text-justify">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.     
            </p>
            <ul>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </li>
                <li>Quis ipsum suspendisse ultrices gravida.</li>
                <li>Risus commodo viverra maecenas accumsan lacus vel facilisis. </li>
            </ul>
        </div>
     

    </div>

    <div class="row justify-content-end py-5">
        <div class="col-5">
            <h2 class="color1 mb-3">
                Valores
            </h2>
            <p class="text-justify">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.     
            </p>
            <ul>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </li>
                <li>Quis ipsum suspendisse ultrices gravida.</li>
                <li>Risus commodo viverra maecenas accumsan lacus vel facilisis. </li>
            </ul>
        </div>
        <div class="col-1"></div>
        <div class="col-5 p-0">
            <img src="{{ asset('img/nosotros2.jpg') }}" class="img-fluid" alt="">
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-10">
            <div class="row">
                <div class="col-3">
                    <h6 class="bold text-dark">Zona sur</h6>
                    <div class="sucursal text-dark">
                        <strong class="color1">Matriz</strong>
                        <p>
                            Calzada Ruiz Cortines No.505-B Entre Calle 11 y Jesus Reyes Heroles Fracc. Costa Verde Boca del Rio, Veracruz, México C.P. 94294
                        </p>
                        <p>
                            <strong>Tel:</strong> 01 800 215 260601,  <br>
                            01 (229) 921 903601,  <br>
                            01 (229) 921 929401,  <br>
                            01 (229) 922 008401 ó <br>
                            01 (229) 922 0085
                        </p>
                        <p>
                            <strong>Correo:</strong>
                            contacto@puertasveracruz.com
                        </p>
                    </div>
                    <div class="sucursal text-dark">
                        <strong class="color1">Bodega y fábrica</strong>
                        <p>
                            Camino Real No.22 BOD. 2, 2ª, 3 Col. Ylang Ylang Boca del Rio, Veracruz, México C.P. 94294
                        </p>
                        <p>
                            <strong>Tel:</strong>01 (229) 927 1881 al 83

                        </p>
                    </div>
                </div>
                <div class="col-3"></div>
                <div class="col-3"></div>
                <div class="col-3"></div>
            </div>
        </div>
    </div>
</section>
@endsection