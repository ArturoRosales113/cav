@extends('frontend.layouts.app')

@section('content')
<div class="row mt-5 py-5 justify-content-center subtitle">
    <div class="col col-lg-10 text-center text-white py-5">
        <h5 class="bold text-uppercase">Distribuidores</h5>
    </div>
</div>
<div class="row justify-content-center py-5">
    <div class="col-10 col-lg-10">
        <ul>
            <li>
                <div class="row py-2 align-items-stretch">
                    <div class="flex-column bg2" style="width:2rem;">

                    </div>
                    <div class=" col">
                        <h6 class="bold text-dark">¿CÓMO PUEDO SER DISTRIBUIDOR?</h6>
                        <p>REALIZANDO COMPRAS DE FORMA PERIÓDICA Y TOMANDO UN CURSO DE CAPACITACIÓN GRATUITO CON
                            NUESTROS INGENIEROS.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="row py-2 align-items-stretch">
                    <div class="flex-colunmn bg3" style="width:2rem;"></div>
                    <div class="col">
                        <h6 class="bold text-dark">¿INSTALAN PUERTAS AUTOMÁTICAS ES EN TODA LA REPÚBLICA?</h6>
                        <p>SÍ, INSTALAMOS PUERTAS EN TODA LA REPÚBLICA Y CENTROAMÉRICA</p>
            </li>
            <li>
                <div class="row py-2 align-items-stretch">
                    <div class="flex-column bg2" style="width:2rem;""></div>
                    <div class=" col">
                        <h6 class="bold text-dark">¿CUÁLES DEBEN SER LAS CARACTERÍSTICAS DE UN PORTÓN PARA PODERLO
                            AUTOMATIZAR?</h6>
                        <p>DEPENDE DEL TIPO DE APERTURA DEL PORTÓN ASÍ COMO TAMBIÉN DEBE CONTAR CON LOS HERRAJES DE
                            ACUERDO AL PESO Y EL
                            TAMAÑO DEL MISMO.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="row py-2 align-items-stretch">
                    <div class="flex-column bg3" style="width:2rem;"></div>
                    <div class="col">
                        <h6 class="bold text-dark">¿CON QUIÉN ME PUEDO COMUNICAR PARA UNA REPARACIÓN?</h6>
                        <p>LLAMAR AL 01800 Y TOMAREMOS SU REPORTE DE IGUAL MANERA LE DAREMOS TIEMPO DE RESPUESTA</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="row py-2 align-items-stretch">
                    <div class="flex-column bg2" style="width:2rem;""></div>
                    <div class=" col">
                        <h6 class="bold text-dark">¿CÓMO APLICA LA GARANTÍA?</h6>
                        <p>ÉSTA SOLO APLICA EN DEFECTOS DE FABRICACIÓN, NO ES VÁLIDA CUANDO SEA POR VARIACIONES DE
                            VOLTAJE, EN CASO DE SER
                            DISTRIBUIDOR PUEDE ENVIAR LA PIEZA Y LE DAMOS UN DIAGNOSTICO EN EL DEPARTAMENTO DE
                            MANTENIMIENTO UNA VEZ REPARADA
                            SE ENVÍA DE REGRESO POR MEDIO DE PAQUETERÍA EN MODO OCURRE POR COBRAR.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="row py-2 align-items-stretch">
                    <div class="flex-column bg3" style="width:2rem;"></div>
                    <div class="col">
                        <h6 class="bold text-dark">¿CUÁL ES EL TIEMPO PROMEDIO DE UN ENVIÓ DE REFACCIONES?</h6>
                        <p>EN 24 HORAS SE EMBARCA Y TARDE UN PROMEDIO DE 2 A 3 DÍAS DEPENDIENDO DEL TIEMPO DE ENTREGA DE
                            LA PAQUETERÍA Y LA
                            ACCESIBILIDAD DEL LUGAR, MANEJAMOS LA PAQUETERÍA DE SU CONFIANZA SIEMPRE Y CUANDO TENGA
                            OFICINA EN VERACRUZ O
                            EN LAS SUCURSALES.</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

<div class="row justify-content-center py-5 bg1">
    <div class="col-10 col-lg-5 text-center py-5">
        <h6 class="bold text-white text-uppercase py-3">
            ¿Quieres ser distribuidor?
        </h6>
        <form action="">
            <div class="form-row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Last name">
                </div>
                <div class="col">
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col">
                    <button class="btn bg-dark text-white w-100" type="submit">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection