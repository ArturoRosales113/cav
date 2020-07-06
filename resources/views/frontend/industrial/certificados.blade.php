@extends('frontend.layouts.app')

@section('page_title')
Certificados
@endsection


@section('content')
<section class="py-5 my-5">
    <div class="row justify-content-center py-5">
        <div class="col-10 col-lg-8">
            <ul class="list-unstyled text-dark">
                <li class="row  ">
                    <div class="col">
                        <img src="{{ asset('img/front/afiliaciones.png') }}" class="img-fluid" alt="...">
                    </div>
                    <div class="col-10">
                        <h5 class="mb-1 bold">AFILIACIONES PROPIAS</h5>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat
                        volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                        nisl ut aliquip ex ea commodo consequat.
                        Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                        illum dolore eu feugiat nulla facilisis at vero eros
                        et accumsan et iusto odio dignissim qui blandit
                    </div>
                </li>
                <li class="row  my-4">
                    <div class="col">
                        <img src="{{ asset('img/front/certificadosamericanos.png') }}" class="img-fluid" alt="...">
                    </div>
                    <div class="col-10">
                        <h5 class="mb-1 bold">CERTIFICADOSAMERICANOS SOBRE PRODUCTOS</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                        purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                        vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </li>
                <li class="row ">
                    <div class="col">
                        <img src="{{ asset('img/front/certificadoseuropeos.png') }}" class="img-fluid" alt="...">
                    </div>
                    <div class="col-10">
                        <h5 class="mb-1 bold">CERTIFICADOS EUROPEOS SOBRE PRODUCTOS</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                        purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                        vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
@endsection