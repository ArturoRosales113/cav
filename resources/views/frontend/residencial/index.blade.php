@extends('frontend.layoutsR.app')

@section('page_banner')
<div class="row mt-lg-5">
    <div class="col-12 p-0">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($banners as $b)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <a href="{{ $b->url }}">
                        <img class="d-block w-100" src="{{ asset($b->img_path) }}" alt="First slide">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center color1 py-4">
    @foreach ($banners as $b)
    <a data-target="#carouselExampleSlidesOnly" data-slide-to="{{ $loop->index }}" class="btn btn-sm color3 {{ $loop->first ? 'active' : '' }}">
        <i class="fas fa-circle fa-lg"></i>
    </a>
    @endforeach
</div>
@endsection

@section('content')
<section class="">
    @if ($destacados->articles()->exists()  ||  $destacados->articles->count() > 3 )
    <div class="row justify-content-center py-5">
        <div class="col-10">
            
            <h5 class="text-dark text-center">
                Productos Más Populares
            </h5>

            <div class="row py-2">
            
                    @foreach ($destacados->articles->where('is_trend','==', 1) as $aa)
                    <div class="col-6 col-lg-3 text-center">
                        <a href="{{ route('front.industrial.producto', $aa -> slug) }}">
                            <img src="{{ $aa->pics()->count() > 0 ? asset($aa->pics()->first()->path) : asset('img/brand/no_img_found.png') }}"
                                class="img-fluid" alt="">
                        </a>
                        <a href="{{ route('front.industrial.producto', $aa -> slug) }}" class="btn btn-sm">
                            <small class="text-dark">{{ $aa->name }}</small>
                        </a>
                    </div>
                    @endforeach
               
            </div>

        </div>
    </div>
    @endif

    <div class="row justify-content-center py-5 bg1">
        <div class="col-10 col-lg-8 text-center py-5">
            <h6 class="bold text-white text-uppercase py-3">
                ¿En qué producto estás interesado?
            </h6>
            <form action="{{ route('front.cotizacion.create') }}" method="POST">
                @csrf
                <input type="hidden" name="interes" value="cotizacion">
                <div class="form-row">
                    <div class="col-12 col-lg">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                    </div>
                    <div class="col-12 col-lg">
                        <input type="text" class="form-control" name="correo" placeholder="Correo">
                    </div>
                    <div class="col-12 col-lg">
                        <select name="article_id" class="form-control">
                            <option value="0">Seleccionar...</option>
                            @foreach ($categories as $c)
                            <optgroup label="{{ ucFirst($c->display_name) }}">
                                @foreach ($c->articles as $a)
                                <option value="{{ $a->id }}">{{ $a->name }}</option>
                                @endforeach
                            </optgroup>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <button class="btn bg-dark text-white w-100" type="submit">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row bg3 justify-content-center align-items-center py-5">
        <div class="col-10">
            <div class="row align-items-center py-lg-3">
                <div class="col-12 col-lg-3 pb-3 pb-lg-0">
                    <h2 class="bold text-dark text-uppercase">
                        ventajas <br> de nuestros <br> equipos
                    </h2>
                    <a href="{{ route('front.residencial.contacto') }}"
                        class="btn btn-lg bg1 text-white">Contáctanos</a>
                </div>
                <div class="col">
                    <p class="text-dark">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam
                        erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                        lobortis nisl ut aliquip ex ea commodo consequat.
                        Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                        illum dolore eu feugiat nulla facilisis at
                        vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue
                        duis dolore te feugait nulla facilisi.
                        Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam
                        erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                        lobortis nisl ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
        </div>
    </div>
    @if ($destacados->articles()->exists()  ||  $destacados->articles->count() > 3 )
    <div class="row justify-content-center py-5">
        <div class="col-10">
            <div class="row py-2">   
              
                    @foreach ($destacados->articles->random(4) as $aa)
                    <div class="col-6 col-lg-3 text-center">
                        <a href="{{ route('front.industrial.producto', $aa -> slug) }}">
                            <img src="{{ $aa->pics()->count() > 0 ? asset($aa->pics()->first()->path) : asset('img/brand/no_img_found.png') }}"
                                class="img-fluid" alt="">
                        </a>
                        <a href="{{ route('front.industrial.producto', $aa -> slug) }}" class="btn btn-sm">
                            <small class="text-dark">{{ $aa->name }}</small>
                        </a>
                    </div>
                    @endforeach
               
            </div>
        </div>
    </div> 
    @endif
</section>
@endsection