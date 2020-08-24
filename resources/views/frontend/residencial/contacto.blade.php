@extends('frontend.layoutsR.app')


@section('content')
<div class="row pt-lg-5">
    <div class="col-12 col-lg-4 bg3 text-dark order-2 order-lg-1">
        <div class="row justify-content-center py-5">
            <div class="col-10">
                <h4 class="bold">
                    Zona zur
                </h4>
                <br>
                <h6>Matriz</h6>
                <p>
                    <small>
                        Calzada Ruiz Cortines No.505-B Entre Calle 11 y Jesus Reyes
                        Heroles Fracc. Costa Verde Boca del Rio, Veracruz, México C.P.
                        94294
                    </small>
                    <br>
                    <br>
                    <small>
                        Tel: 01 800 215 260601, 01 (229) 921 903601, 01 (229) 921
                        929401, 01 (229) 922 008401, 01 (229) 922 0085
                    </small>
                </p>
                <h6>BODEGA Y FÁBRICA</h6>
                <p>
                    <small>
                        Camino Real No.22 BOD. 2, 2ª, 3 Col. Ylang Ylang Boca del Rio,
                        Veracruz, México C.P. 94294
                    </small>
                    <br>
                    <br>
                    <small>
                        Tel: 01 (229) 927 1881 al 83
                    </small>
                </p>
                <h6>SUCURSAL VILLAHERMOSA</h6>
                <p>
                    <small>
                        Calle Oaxaca No. 108 Fracc. guadalupe Villahermosa, Tabasco,
                        México. C.P. 86180
                    </small>
                    <br>
                    <br>
                    <small>
                        Tel: 01 (993) 352 2021, 01 (993) 352 1821
                    </small>
                </p>
            </div>
        </div>
        <div class="row justify-content-center py-3">
            <div class="col-10">
                <h4 class="bold">
                    Zona Norte
                </h4>
                <br>
                <h6>SUCURSAL MONTERREY</h6>
                <p>
                    <small>
                        Crispin Treviño No.3730 Col. Venustiano Carranza Monterrey,
                        Nuevo Leon, México. C.P. 64103
                    </small>
                    <br>
                    <br>
                    <small>
                        Tel: 01 (81) 8355 9411, 01 (81) 8355 6591
                    </small>
                </p>
                <h6>SUCURSAL CHIHUAHUA</h6>
                <p>
                    <small>
                        Sabino No. 1910 Col. Las Granjas Chihuahua, Chihuahua, México.
                        C.P. 64103
                    </small>
                    <br>
                    <br>
                    <small>
                        Tel: 01 (614) 414 7225
                    </small>
                </p>
            </div>
        </div>
        <div class="row justify-content-center py-3">
            <div class="col-10">
                <h4 class="bold">
                    Zona Centro
                </h4>
                <br>
                <h6>SUCURSAL PUEBLA</h6>
                <p>
                    <small>
                        13 Sur No. 2104 Col. Santiago Puebla, Puebla, México. C.P. 72000
                    </small>
                    <br>
                    <br>
                    <small>
                        Tel/Fax: 01 (222) 404 6616 al 18
                    </small>
                </p>

            </div>
        </div>
    </div>
    <div class="col-12 col-lg-8 text-center order-1 order-lg-2">
        <div class="row">
            <div class="col-12 p-0">
                <img src="{{ asset('img/map.jpg') }}" alt="" class="img-fluid mb-5">
            </div>
        </div>
        <div class="row justify-content-center py-5">
            <div class="col-10">
                <h4 class="bold">Contáctanos</h4>
                <form action="{{ route('front.mensaje.create') }}" method="POST" class="contact_form">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="{{old('nombre')}}">
                                @if ($errors->has('nombre'))
                                <span class="help-block">
                                        <small class="text-danger">{{ $errors->first('nombre') }}</small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="correo" placeholder="Correo" value="{{old('correo')}}">
                                @if ($errors->has('correo'))
                                <span class="help-block">
                                        <small class="text-danger">{{ $errors->first('correo') }}</small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="interes" placeholder="Interés">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <textarea name="mensaje" id="" cols="30" rows="5" class="form-control" placeholder="Mensaje">{{old('mensaje')}}</textarea>
                            @if ($errors->has('mensaje'))
                            <span class="help-block">
                                    <small class="text-danger">{{ $errors->first('mensaje') }}</small>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row py-3">
                        <div class="col text-left">
                            <button type="submit" class="btn bg1 text-white">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row justify-content-center py-3">
            <div class="col-10">
                <h4 class="text-dark bold">Síguenos en:</h4>
                <div class="row justify-content-center justify-content-lg-around py-5">
                    <a href="#" class="btn btn-sm color1"> <i class="fab fa-instagram fa-2x"></i> </a>
                    <a href="#" class="btn btn-sm color1"><i class="fab fa-linkedin-in fa-2x"></i> </a>
                    <a href="#" class="btn btn-sm color1"> <i class="fab fa-whatsapp fa-2x"></i> </a>
                    <a href="#" class="btn btn-sm color1"> <i class="fab fa-facebook-f fa-2x"></i> </a>
                    <a href="#" class="btn btn-sm color1"><i class="fab fa-youtube fa-2x"></i> </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection