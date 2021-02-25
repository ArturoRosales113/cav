@extends('frontend.layouts.app')


@section('content')
<div class="row">
    <div class="col-12 text-center order-1 order-lg-2">
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
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre"
                                    value="{{old('nombre')}}">
                                @if ($errors->has('nombre'))
                                <span class="help-block">
                                    <small class="text-danger">{{ $errors->first('nombre') }}</small>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="correo" placeholder="Correo"
                                    value="{{old('correo')}}">
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
                            <textarea name="mensaje" id="" cols="30" rows="5" class="form-control"
                                placeholder="Mensaje">{{old('mensaje')}}</textarea>
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

        <div class="row justify-content-center pb-5">
            <div class="col-10">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-3">
                        <h6 class="bold text-dark">Zona sur</h6>
                        <div class="sucursal text-dark">
                            <strong class="color1">Matriz</strong>
                            <p>
                                Calzada Ruiz Cortines No.505-B Entre Calle 11 y Jesus Reyes Heroles Fracc. Costa Verde Boca del Rio, Veracruz, México C.P. 94294
                            </p>
                            <p>
                                <strong>Tel:</strong> 01 800 215 260601,<br>
                                01 (229) 921 903601, <br>
                                01 (229) 921 929401, <br>
                                01 (229) 922 008401,
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
                            <strong class="color1">Sucursal Villahermosa</strong>
                            <p>
                                Calle Oaxaca No. 108 Fracc. guadalupe Villahermosa, Tabasco, México. C.P. 86180
                            </p>
                            <p>
                                <strong>Tel:</strong> 01 (993) 352 2021,<br>
                                 01 (993) 352 1821
                            </p>
                            <p>
                                <strong>Correo:</strong> <br>
                                villahermosa@puertasveracruz.com
                            </p>
                        </div>
                        {{-- <div class="sucursal text-dark">
                            <strong class="color1">SUCURSAL MÉRIDA</strong>
                            <p>
                                Calle Oaxaca No. 108 Fracc. guadalupe Villahermosa, Tabasco, México. C.P. 86180
                                <p>
                                    <strong>Tel:</strong> 01 (993) 352 2021, <br>
                                    01 (993) 352 1821
                                </p>
                        </div> --}}
                        {{-- <div class="sucursal text-dark">
                            <strong class="color1">SUCURSAL CANCÚN</strong>
                            <p>
                                13 Sur No. 2104 Col. Santiago Puebla, Puebla, México. C.P. 72000
                                <p>
                                    <strong>Tel:</strong> 01 (222) 404 6616 al 181
                                </p>
                        </div> --}}
                    </div>
                    <div class="col-12 col-lg-3 border-right border-left">
                        <h6 class="bold text-dark">Zona Norte</h6>
                        <div class="sucursal text-dark">
                            <strong class="color1">Sucursal Monterrey</strong>
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
                            <strong class="color1">Sucursal Chihuahua</strong>
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
                            <strong class="color1">Sucursal Puebla </strong>
                            <p>
                                13 Sur No. 2104 Col. Santiago Puebla, Puebla, México. C.P. 72000                            
                            </p>
                            <p>
                                <strong>Tel/Fax:</strong> 01 (222) 404 6616 al 181

                            </p>
                        </div>
                        <div class="sucursal text-dark">
                            <strong class="color1">SUCURSAL Querétaro</strong>
                            <p>
                                Calle primer Retorno Universitario No. 1B Int. 21, Unidad Condominal Terra Business Park, Condominio B, Municipio El Marqués, Querétaro                            
                            </p>
                            {{-- <p>
                                <strong>Tel/Fax:</strong> 01 (222) 404 6616 al 18

                            </p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection