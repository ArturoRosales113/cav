<footer class="text-white">
    <div class="row align-items-stretch pt-5 py-lg-5 justify-content-center menu">
        <div class="col-10 col-lg-5 order-3 order-lg-1 py-5 py-lg-0 text-left">
            <div class="row h-100 align-items-start">

                <div class="col-12">
                    <h5>
                        Contacto <br>
                        <small>Tenemos servicio en toda la República Mexicana</small>
                    </h5>

                </div>
                <div class="col-12">
                    <div class="row justify-content-center py-3">

                        <div class="col-10 col-md-4 col-lg-4">
                            <div class="row align-items-center">
                                <div class="col-1 p-0">
                                    <i class="fas fa-phone-volume"></i>
                                </div>
                                <div class="col">
                                    <small class="text-uppercase">Zona sur</small> <br>
                                    <small>01 800 215 260601</small>

                                </div>
                            </div>
                        </div>
                        <div class="w-100 d-md-none"></div>

                        <div class="col-10 col-md-4 col-lg-4">
                            <div class="row align-items-center">
                                <div class="col-1 p-0">
                                    <i class="fas fa-phone-volume"></i>
                                </div>
                                <div class="col">
                                    <small class="text-uppercase">Zona centro</small> <br>
                                    <small>01 222 404 6616</small>

                                </div>
                            </div>
                        </div>
                        <div class="w-100 d-md-none"></div>

                        <div class="col-10 col-md-4 col-lg-4">
                            <div class="row align-items-center">
                                <div class="col-1 p-0">
                                    <i class="fas fa-phone-volume"></i>
                                </div>
                                <div class="col">
                                    <small class="text-uppercase">Zona Norte</small> <br>
                                    <small>01 81 83559411</small>

                                </div>
                            </div>
                        </div>
                        <div class="w-100 d-md-none"></div>

                    </div>
                </div>

                <div class="col-12">
                    <div class="row">
                        <div class="col">
                            <h6>Dirección matriz:</h6>
                            <small class="text-uppercase">
                                Calzada Ruiz Cortines No.505-B Entre Calle 11 y Jesús
                                Reyes Heróles Fracc. Costa Verde Boca del Río,
                                Veracruz, Mexico C.P. 94294
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-12 align-self-end p-0">
                    <hr class="text-white bg-light ">
                    <div class="row justify-content-center justify-content-lg-start">
                        <a href="#" class="btn btn-sm text-white  m-2 mr-lg-4"> <i class="fab fa-instagram"></i> </a>
                        <a href="#" class="btn btn-sm text-white  m-2 mr-lg-4"><i class="fab fa-linkedin-in"></i> </a>
                        <a href="#" class="btn btn-sm text-white  m-2 mr-lg-4"> <i class="fab fa-whatsapp"></i> </a>
                        <a href="#" class="btn btn-sm text-white  m-2 mr-lg-4"> <i class="fab fa-facebook-f"></i> </a>
                        <a href="#" class="btn btn-sm text-white  m-2 mr-lg-4"><i class="fab fa-youtube"></i> </a>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-10 col-md-5 col-lg-3 order-1 order-lg-2 text-left">
            <h5>Productos</h5>
            <ul class="list-group pb-5 pb-lg-0">
                @foreach ($mainFamily->categories as $cat)
                <li class="list-group-item text-uppercase">
                    <a href="{{ route('front.industrial.productos.categoria', $cat->name) }}"
                        class="text-white">{{ $cat->display_name }}</a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="col-10 col-md-5 col-lg-3 order-2 order-lg-3 text-left">
            <h5>Aplicaciones</h5>
            <ul class="list-group pb-5 pb-lg-2">
                @foreach ($mainFamily->aplications as $apt)
                <li class="list-group-item text-uppercase">
                    <a href="{{ route('front.industrial.aplicaciones') }}"
                        class="text-white">{{ $apt->display_name }}</a>
                </li>
                @endforeach
            </ul>
            <h5>Servicios</h5>
            <ul class="list-group">
                <li class="list-group-item text-uppercase">
                    <a href="{{ route('front.residencial.servicios') }}" class="text-white">Asesoría</a>
                </li>
                <li class="list-group-item text-uppercase">
                    <a href="{{ route('front.residencial.servicios') }}" class="text-white">Asesoría Técnica</a>
                </li>
                <li class="list-group-item text-uppercase">
                    <a href="{{ route('front.residencial.servicios') }}" class="text-white">Venta</a>
                </li>
                <li class="list-group-item text-uppercase">
                    <a href="{{ route('front.residencial.servicios') }}" class="text-white">Cursos</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="row justify-content-around align-items-center py-3">
        <div class="col-12 col-md-6 col-lg-3 order-1 text-center">
            <a href="{{ route('front.residencial.certificados') }}" class="btn btn-link text-dark">
                <small>Afiliaciones y certificaciones</small>
            </a>
        </div>
        <div class="col col-md order-3 order-lg-2">
            <div class="row justify-content-center pt-3 pt-lgp-0 align-items-center">
                <div class="col text-center">
                    <img src="{{ asset('img/iconos/afiliacion.png') }}" class="img-fluid">
                </div>
                <div class="col text-center">
                    <img src="{{ asset('img/iconos/afiliacion_1.png') }}" class="img-fluid">
                </div>
                <div class="col text-center">
                    <img src="{{ asset('img/iconos/afiliacion_2.png') }}" class="img-fluid">
                </div>
                <div class="col text-center">
                    <img src="{{ asset('img/iconos/afiliacion_3.png') }}" class="img-fluid">
                </div>
                <div class="col text-center">
                    <img src="{{ asset('img/iconos/afiliacion_4.png') }}" class="img-fluid">
                </div>
                <div class="col text-center">
                    <img src="{{ asset('img/iconos/afiliacion_5.png') }}" class="img-fluid">
                </div>
                <div class="col text-center">
                    <img src="{{ asset('img/iconos/afiliacion_6.png') }}" class="img-fluid">
                </div>
                <div class="col text-center">
                    <img src="{{ asset('img/iconos/afiliacion_7.png') }}" class="img-fluid">
                </div>
                <div class="col text-center">
                    <img src="{{ asset('img/iconos/afiliacion_8.png') }}" class="img-fluid">
                </div>
                <div class="col text-center">
                    <img src="{{ asset('img/iconos/afiliacion_9.png') }}" class="img-fluid">
                </div>
                <div class="col text-center">
                    <img src="{{ asset('img/iconos/afiliacion_10.png') }}" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 order-2 order-lg-3 text-center">
            <a href="{{ route('privacidad') }}" class="btn btn-link text-dark">
                <small>Politica de privacidad</small>
            </a>
        </div>
    </div>
</footer>