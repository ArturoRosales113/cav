@extends('frontend.layouts.app')

@section('page_title')
Nosotros
@endsection


@section('content')
<section class="pb-5">
    <div class="row pb-5">
        <div class="col-12 p-0">
            <img src="{{ asset('img/nosotros.jpg') }}" alt="" class="img-fluid">
        </div>
    </div>
    <div class="row justify-content-center pb-5">
        <div class="col-12 col-lg-10">
            <div class="row">
                <div class="col-lg-7 bg1 nosotros-title">
                    <div class="row justify-content-center py-5">
                        <div class="col-10 py-3">
                            <h1 class="text-white">30 años abriendo <br> puertas</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center justify-content-lg-end align-items-lg-center py-5">
        <div class="col-10 col-lg-5 pb-4 pb-lg-0">
            <h2 class="color1 mb-3">
                Sobre nosotros
            </h2>
            <p class="text-justify">
                Somos una empresa sólida con 36 años de experiencia en los mercados: Residencial, Indsutrial, Comercial,
                Aeropuertario, que cuenta con productos y procesos de calidad en la elaboración, instalación,
                suministro y mantenimiento de accesos en el sector residencial, comercial, industrial y hotelero
                conformado por un gran equipo de gente comprometida y profesional, logrando un objetivo
                común: la satisfacción de nuestros clientes.
            </p>

        </div>
        <div class="col-1 d-none d-lg-flex"></div>
        <div class="col-12 col-lg-5 p-0">
            <img src="{{ asset('img/nosotros2.jpg') }}" class="img-fluid" alt="">
        </div>
    </div>

    <div class="row justify-content-center justify-content-lg-start align-items-lg-center py-5">
        <div class="col-12 col-lg-5 p-0 order-3 order-lg-1">
            <img src="{{ asset('img/nosotros2.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-1 d-none d-lg-flex order-2"></div>
        <div class="col-10 col-lg-5 pb-4 pb-lg-0 order-1 order-lg-3">
            <h2 class="color1 mb-3">
                Oferta de valor
            </h2>
            <p class="text-justify">
                Diseñamos productos a medida de cada proyecto en el que participamos, cumpliendo con los estándares más
                altos del mercado, traduciéndose en algo práctico para el usuario final
            </p>

        </div>


    </div>

    <div class="row justify-content-center justify-content-lg-end align-items-lg-center py-5">
        <div class="col-10 col-lg-5 pb-4 pb-lg-0">
            <h2 class="color1 mb-3">
                Misión
            </h2>
            <p class="text-justify">
                Ser una empresa sólida con productos y procesos de calidad en la elaboración, instalación suministro y
                mantenimiento de puertas para los sectores:Residencial, Comercial e Industrial, conformado por un equipo
                de profesionales comprometidos a satisfacer las necesidades de nuestros clientes
            </p>
            <h2 class="color1 mb-3">
                Visión
            </h2>
            <ul>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. </li>
                <li>Quis ipsum suspendisse ultrices gravida.</li>
                <li>Risus commodo viverra maecenas accumsan lacus vel facilisis. </li>
            </ul>
        </div>
        <div class="col-1 d-none d-lg-flex"></div>
        <div class="col-12 col-lg-5 p-0">
            <img src="{{ asset('img/nosotros2.jpg') }}" class="img-fluid" alt="">
        </div>
    </div>



    <div class="row justify-content-center">
        <div class="col-10">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-3">
                    <h6 class="bold text-dark">Zona sur</h6>
                    <div class="sucursal text-dark">
                        <strong class="color1">Matriz</strong>
                        <p>
                            Calzada Ruiz Cortines No.505-B Entre Calle 11 y Jesus Reyes Heroles Fracc. Costa Verde Boca
                            del Rio, Veracruz, México C.P. 94294
                        </p>
                        <p>
                            <strong>Tel:</strong> 01 800 215 260601, <br>
                            01 (229) 921 903601, <br>
                            01 (229) 921 929401, <br>
                            01 (229) 922 008401 ó <br>
                            01 (229) 922 0085
                        </p>
                        <p>
                            <strong>Correo:</strong> <br>
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
                <div class="col-12 col-lg-3">
                    <h6 class="bold text-dark">&nbsp;</h6>
                    <div class="sucursal text-dark">
                        <strong class="color1">SUCURSAL VILLAHERMOSA</strong>
                        <p>
                            Calle Oaxaca No. 108 Fracc. guadalupe Villahermosa, Tabasco, México. C.P. 86180
                        </p>
                        <p>
                            <strong>Tel:</strong>01 (993) 352 2021, <br>
                            01 (993) 352 1821
                        </p>
                        <p>
                            <strong>Correo:</strong> <br>
                            villahermosa@puertasveracruz.com
                        </p>
                    </div>
                    <div class="sucursal text-dark">
                        <strong class="color1">SUCURSAL MÉRIDA</strong>
                        <p>
                            Calle Oaxaca No. 108 Fracc. guadalupe Villahermosa, Tabasco, México. C.P. 86180
                            <p>
                                <strong>Tel:</strong> 01 (993) 352 2021, <br>
                                01 (993) 352 1821
                            </p>
                    </div>
                    <div class="sucursal text-dark">
                        <strong class="color1">SUCURSAL CANCÚN</strong>
                        <p>
                            13 Sur No. 2104 Col. Santiago Puebla, Puebla, México. C.P. 72000
                            <p>
                                <strong>Tel:</strong> 01 (222) 404 6616 al 181
                            </p>
                    </div>
                </div>
                <div class="col-12 col-lg-3 border-right border-left">
                    <h6 class="bold text-dark">Zona Norte</h6>
                    <div class="sucursal text-dark">
                        <strong class="color1">SUCURSAL MONTERREY</strong>
                        <p>
                            Crispin Treviño No.3730 Col. Venustiano Carranza Monterrey, Nuevo Leon, México. C.P. 64103
                        </p>
                        <p>
                            <strong>Tel:</strong> 01 (81) 8355 9411, <br>
                            01 (81) 8355 6591

                        </p>
                        <p>
                            <strong>Correo:</strong> <br>
                            monterrey@puertasveracruz.com
                        </p>
                    </div>
                    <div class="sucursal text-dark">
                        <strong class="color1">SUCURSAL CHIHUAHUA</strong>
                        <p>
                            Sabino No. 1910 Col. Las Granjas Chihuahua, Chihuahua, México. C.P. 64103
                        </p>
                        <p>
                            <strong>Tel:</strong> 01 (614) 414 7225

                        </p>
                        <p>
                            <strong>Correo:</strong> <br>
                            chihuahua@puertasveracruz.com
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <h6 class="bold text-dark">Zona Centro</h6>
                    <div class="sucursal text-dark">
                        <strong class="color1">SUCURSAL PUEBLA </strong>
                        <p>
                            13 Sur No. 2104 Col. Santiago Puebla, Puebla, México. C.P. 72000
                        </p>
                        <p>
                            <strong>Tel/Fax:</strong> 01 (222) 404 6616 al 181

                        </p>
                    </div>
                    <div class="sucursal text-dark">
                        <strong class="color1">SUCURSAL QUERÉTARO </strong>
                        <p>
                            13 Sur No. 2104 Col. Santiago Puebla, Puebla, México. C.P. 72000
                        </p>
                        <p>
                            <strong>Tel/Fax:</strong> 01 (222) 404 6616 al 181

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection