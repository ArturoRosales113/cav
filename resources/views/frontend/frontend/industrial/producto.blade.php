@extends('frontend.layouts.app')


@section('content')
<div class="row justify-content-center align-items-start py-5 mt-5">
    <div class="col-12 col-lg-5">  
        @if ($article->pics()->exists())
        <div id="{{ 'carousel'.$article->id }}" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            @foreach ($article->pics as $indicator)
            <li data-target="#{{ 'carousel'. $article->id }}" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
            @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach ($article->pics as $pic)
                <div class="carousel-item  {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ asset($pic->path) }}" class="d-block w-100" alt="{{ asset('img/brand/no_img_found.png') }}">
    
                  </div>
                @endforeach                          
            </div>
            <a class="carousel-control-prev" href="#{{ 'carousel'.$article->id }}" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#{{ 'carousel'.$article->id }}" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
        @else
        <img src="{{ asset('img/brand/no_img_found.png') }}" alt="" class="img-fluid w-100">
        @endif
    </div>
    <div class="col-12 col-lg-5">
        <h1 class="text-dark">{{ ucFirst($article->name) }}</h1>
        <p class="text-justify ">
            {{ $article -> description }}
        </p>

    </div>
</div>
<div class="row justify-content-center py-5">
    <div class="col-10">
        <div class="accordion" id="accordionExample">

            @if ($article->aplications()->exists())
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
                        <div class="row">
                            @foreach ($article->aplications as $aa)
                            <div class="col-1 text-dark text-center">
 
                                <a href="" class="btn btn-sm text-dark d-block">
                                    <img class="img-fluid" src="{{ $aa->icon_path == null ? asset('img/brand/no_img_found.png') : asset($aa->icon_path)}}" alt="">   
                                    {{ ucFirst($aa->display_name) }}
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endif

            @if ($article->downloads()->exists())
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
                        <a href="{{ asset($ad->path) }}" class="text-white btn bg1" target="_blank">
                            {{str_replace('article_downloads/','',$ad->path)}}
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif

            @if ($article->specs != null)
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
            @endif

        </div>
    </div>
</div>
@endsection