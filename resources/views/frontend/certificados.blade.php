@extends('frontend.layouts.app')

@section('page_title')
Certificados
@endsection


@section('content')
<section class="py-5 my-5">
    <div class="row justify-content-center py-5">
        <div class="col-10 col-lg-8">
            <ul class="list-unstyled text-dark">
                {{-- <li class="row border border-dark my-3 py-4">
                    <div class="col">
                        <img src="{{ asset('img/front/afiliaciones.png') }}" class="img-fluid" alt="...">
                    </div>
                    <div class="col-10">
                        <h6 class="mb-1 bold">AFILIACIONES PROPIAS</h6>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat
                        volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                        nisl ut aliquip ex ea commodo consequat.
                    </div>
                </li> --}}
                <li class="row border border-dark my-3 py-4">
                    <div class="col">
                        <img src="{{ asset('img/front/certificadosamericanos.png') }}" class="img-fluid" alt="...">
                    </div>
                    <div class="col-10">
                        <h6 class="mb-1 bold">CERTIFICADOS AMERICANOS SOBRE PRODUCTOS</h6>
                        Nuestros productos cuentan con certificados de gran renombre en el mercado americano como: UL, WH, Bureau Vertias, ANSI, MHTS
                    </div>
                </li>
                <li class="row border border-dark my-3 py-4">
                    <div class="col">
                        <img src="{{ asset('img/front/certificadoseuropeos.png') }}" class="img-fluid" alt="...">
                    </div>
                    <div class="col-10">
                        <h6 class="mb-1 bold">CERTIFICADOS EUROPEOS SOBRE PRODUCTOS</h6>
                        Nuestros productos cuentan con certificados de gran renombre en el mercado europeo como: CE, TECNALIA, TUV NORD, TUV REYNAUD, APPLUS, UNE
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
@endsection