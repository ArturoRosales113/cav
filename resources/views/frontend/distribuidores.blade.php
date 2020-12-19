@extends('frontend.layouts.app')


@section('content')
<div class="row justify-content-center pb-5">
    <div class="col-10">
        <div class="row">
            <div class="col p-0">
                <img src="{{ asset('img/dist.jpg') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center pb-5">
    <div class="col-10">
      <h5 class="bold text-dark mb-4">
        ¿Tienes alguna duda para ser distribuidor?, A continuación te mostramos algunas preguntas frecuentes:
      </h5>
        <div class="accordion" id="accordionExample">
            <div class="pav-pill distribuidores border shadow mb-3">
              <button class="btn btn-link btn-block text-left text-dark" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                +¿CÓMO PUEDO SER DISTRIBUIDOR?
              </button>
          
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  REALIZANDO COMPRAS DE FORMA PERIÓDICA Y TOMANDO UN CURSO DE CAPACITACIÓN GRATUITO CON NUESTROS INGENIEROS.
                </div>
              </div>
            </div>
            <div class="pav-pill distribuidores border shadow mb-3">
              <button class="btn btn-link btn-block text-left text-dark" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                +¿INSTALAN PUERTAS AUTOMÁTICAS ES EN TODA LA REPÚBLICA?
              </button>
          
              <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  SÍ, INSTALAMOS PUERTAS EN TODA LA REPÚBLICA Y CENTROAMÉRICA
                </div>
              </div>
            </div>
            <div class="pav-pill distribuidores border shadow mb-3">
              <button class="btn btn-link btn-block text-left text-dark" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                +¿CUÁLES DEBEN SER LAS CARACTERÍSTICAS DE UN PORTÓN PARA PODERLO AUTOMATIZAR?
              </button>
          
              <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  DEPENDE DEL TIPO DE APERTURA DEL PORTÓN ASÍ COMO TAMBIÉN DEBE CONTAR CON LOS HERRAJES DE ACUERDO AL PESO Y EL TAMAÑO DEL MISMO.
                </div>
              </div>
            </div>
            <div class="pav-pill distribuidores border shadow mb-3">
              <button class="btn btn-link btn-block text-left text-dark" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                +¿CON QUIÉN ME PUEDO COMUNICAR PARA UNA REPARACIÓN?
              </button>
          
              <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  LLAMAR AL 01800 Y TOMAREMOS SU REPORTE DE IGUAL MANERA LE DAREMOS TIEMPO DE RESPUESTA
                </div>
              </div>
            </div>
            <div class="pav-pill distribuidores border shadow mb-3">
              <button class="btn btn-link btn-block text-left text-dark" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                +¿CÓMO APLICA LA GARANTÍA?
              </button>
          
              <div id="collapseFive" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  ÉSTA SOLO APLICA EN DEFECTOS DE FABRICACIÓN, NO ES VÁLIDA CUANDO SEA POR VARIACIONES DE VOLTAJE, EN CASO DE SER DISTRIBUIDOR PUEDE ENVIAR LA PIEZA Y LE DAMOS UN DIAGNOSTICO EN EL DEPARTAMENTO DE MANTENIMIENTO UNA VEZ REPARADA SE ENVÍA DE REGRESO POR MEDIO DE PAQUETERÍA EN MODO OCURRE POR COBRAR.
                </div>
              </div>
            </div>
            <div class="pav-pill distribuidores border shadow mb-3">
              <button class="btn btn-link btn-block text-left text-dark" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                +¿CUÁL ES EL TIEMPO PROMEDIO DE UN ENVIÓ DE REFACCIONES?
              </button>
          
              <div id="collapseSix" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  EN 24 HORAS SE EMBARCA Y TARDE UN PROMEDIO DE 2 A 3 DÍAS DEPENDIENDO DEL TIEMPO DE ENTREGA DE LA PAQUETERÍA Y LA ACCESIBILIDAD DEL LUGAR, MANEJAMOS LA PAQUETERÍA DE SU CONFIANZA SIEMPRE Y CUANDO TENGA OFICINA EN VERACRUZ O EN LAS SUCURSALES.
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
<div class="row justify-content-center pb-5">
    <div class="col-10">
        <div class="row bg1">
            <div class="col">
                <h4 class="text-white bold">
                    Pre-registro para Distribución
                </h4>
            </div>
        </div>
    </div>
</div>

@endsection