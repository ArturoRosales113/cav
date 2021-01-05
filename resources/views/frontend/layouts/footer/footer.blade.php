<footer class="text-white">
    <div class="row justify-content-center menu">
        <div class="col-11 col-lg-10">
            <div class="row pt-5 py-lg-5">
                <div class="col-12 col-lg-4 text-left mb-3 mb-lg-0">
                    <div class="row h-100 align-items-start">

                        <div class="col-12">
                            <h5 class="color1">
                                Contacto
                            </h5>
                            <span class="text-uppercase">Tenemos servicio en toda la República Mexicana</span>

                        </div>
                        <div class="col-12">
                            <div class="row justify-content-start py-3">

                                <div class="col-10 col-md-4 col-lg-6">
                                    <div class="row align-items-center">
                                        <div class="col-1">
                                            <i class="fas fa-phone-volume"></i>
                                        </div>
                                        <div class="col">
                                            <small class="text-uppercase">Zona sur</small> <br>
                                            <small>01 800 215 260601</small>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-10 col-md-4 col-lg-6">
                                    <div class="row align-items-center">
                                        <div class="col-1">
                                            <i class="fas fa-phone-volume"></i>
                                        </div>
                                        <div class="col">
                                            <small class="text-uppercase">Zona centro</small> <br>
                                            <small>01 222 404 6616</small>

                                        </div>
                                    </div>
                                </div>


                                <div class="col-10 col-md-4 col-lg-6">
                                    <div class="row align-items-center">
                                        <div class="col-1">
                                            <i class="fas fa-phone-volume"></i>
                                        </div>
                                        <div class="col">
                                            <small class="text-uppercase">Zona Norte</small> <br>
                                            <small>01 81 83559411</small>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col">
                                    <span class="text-uppercase">
                                        Dirección matriz: <br>
                                        Calzada Ruiz Cortines No.505-B Entre Calle 11 y Jesús
                                        Reyes Heróles Fracc. Costa Verde Boca del Río,
                                        Veracruz, Mexico C.P. 94294
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-12 col-lg-3 text-left mb-3 mb-lg-0">
                    <h5 class="color1">Productos</h5>
                    <ul class="list-group">

                        @foreach ($fam->categories as $cat)
                        <li class="list-group-item">
                            <a href="{{ route('front.productos.categoria', ['family' => $fam->name,'categoryName' => $cat->name]) }}"
                                class="text-white">
                                {{ $cat->display_name }}
                            </a>
                        </li>
                        @endforeach

                    </ul>
                </div>
                <div class="col-12 col-lg-2 text-left mb-3 mb-lg-0">
                    <h5 class="color1">Aplicaciones</h5>
                    <ul class="list-group">

                        <li class="list-group-item">
                            @foreach ($fam->aplications as $apt)
                            <a href="{{ route('front.aplicaciones', $fam->name) }}"
                                class="text-white">{{ $apt->display_name }}</a>
                            @endforeach
                        </li>

                    </ul>


                </div>
                <div class="col-12 col-lg-3 text-left mb-3 mb-lg-0">
                    <h5 class="color1">Servicios</h5>
                    <ul class="list-group">

                        <li class="list-group-item ">
                            <a href="{{ route('front.servicios', $fam->name) }}" class="text-white ">
                                Especificación
                            </a>
                        </li>
                        <li class="list-group-item ">
                            <a href="{{ route('front.servicios', $fam->name) }}" class="text-white ">
                                Instalación
                            </a>
                        </li>
                        <li class="list-group-item ">
                            <a href="{{ route('front.servicios', $fam->name) }}" class="text-white ">
                                Venta
                            </a>
                        </li>
                        <li class="list-group-item ">
                            <a href="{{ route('front.servicios', $fam->name) }}" class="text-white ">
                                Pólizas de mantenimiento
                            </a>
                        </li>

                    </ul>


                </div>
            </div>
            <div class="row pb-3 justify-content-center">
                <div class="col">
                    <div class="d-flex flex-row justify-content-center justify-content-lg-start menu-sociales-footer">
                        @include('frontend.layouts.slices.menuSociales')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center bg2 py-3">
        <div class="col-12 col-lg-7 p-0">
            <ul class="nav flex-column flex-lg-row">
                @include('frontend.layouts.slices.menuFooter')
            </ul>
        </div>
        <div class="col-12 col-lg-3">
            <div class="row justify-content-around">
                <a class="btn btn-link color3 col-12 col-lg-6" href="{{ route('front.certificados') }}"
                    onclick="event.preventDefault();document.getElementById('certificados-form-get').submit();">

                    Certificados
                </a>

                <a href="{{ route('front.noticias',$fam->display_name) }}" class="btn btn-link color3 col-12 col-lg-6">
                    Noticias
                </a>
            </div>
        </div>
    </div>
</footer>