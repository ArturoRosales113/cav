@extends('frontend.layouts.app')


@section('content')
<div class="row justify-content-center align-items-start py-5 mt-5">
    <div class="col-12 col-lg-5">
        <img src=" {{ $article->pics()->count() > 0 ? asset($a->pics()->first()->path) : asset('img/brand/no_img_found.png') }}"
            alt="" class="img-fluid w-100">
    </div>
    <div class="col-12 col-lg-5">
        <h1 class="text-dark">{{ ucFirst($article->name) }}</h1>
        <p class="text-justify ">
            {{ $article -> description }}
        </p>
        <div class="row">
            <img src="{{ asset('img/brand/no_img_found.png') }}" alt="" class="col-4 img-fluid">
            <img src="{{ asset('img/brand/no_img_found.png') }}" alt="" class="col-4 img-fluid">
            <img src="{{ asset('img/brand/no_img_found.png') }}" alt="" class="col-4 img-fluid">
        </div>
    </div>
</div>
<div class="row justify-content-center py-5">
    <div class="col-10">
        <div class="accordion" id="accordionExample">

            <div class="card border border-secondary my-4">
                <div class="card-header bg-white bg-white" id="headingaplicaciones">
                    <h2 class="mb-0">
                        <button class="btn btn-link text-dark" type="button" data-toggle="collapse"
                            data-target="#aplicaciones" aria-expanded="true" aria-controls="aplicaciones">
                            <h5 class="bold text-uppercase">Aplicaciones</h5>
                        </button>
                    </h2>
                </div>

                <div id="aplicaciones" class="collapse" aria-labelledby="headingaplicaciones"
                    data-parent="#accordionExample">
                    <div class="card-body text-dark">
                        @foreach ($article->aplications as $aa)
                        <a href="" class="text-dark ">
                            {{ ucFirst($aa->display_name) }}
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="card border border-secondary my-4">
                <div class="card-header bg-white" id="headingaplicaciones">
                    <h2 class="mb-0">
                        <button class="btn btn-link text-dark" type="button" data-toggle="collapse"
                            data-target="#descargas" aria-expanded="true" aria-controls="descargas">
                            <h5 class="bold text-uppercase">Descargas</h5>
                        </button>
                    </h2>
                </div>

                <div id="descargas" class="collapse" aria-labelledby="headingaplicaciones"
                    data-parent="#accordionExample">
                    <div class="card-body text-dark">
                        @foreach ($article->downloads as $ad)
                        <a href="" class="text-dark ">
                            {{ ucFirst($ad->pdf_path) }}
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="card border border-secondary my-4">
                <div class="card-header bg-white" id="headingaplicaciones">
                    <h2 class="mb-0">
                        <button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#specs"
                            aria-expanded="true" aria-controls="specs">
                            <h5 class="bold text-uppercase">Especificaciones</h5>
                        </button>
                    </h2>
                </div>

                <div id="specs" class="collapse" aria-labelledby="headingaplicaciones" data-parent="#accordionExample">
                    <div class="card-body text-dark">
                        {{ $article -> specs }}
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection