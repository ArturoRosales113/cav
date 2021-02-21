@extends('frontend.layouts.app')

@section('page_head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
    integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
    crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"
    integrity="sha512-C8Movfk6DU/H5PzarG0+Dv9MA9IZzvmQpO/3cIlGIflmtY3vIud07myMu4M/NTPJl8jmZtt/4mC9bAioMZBBdA=="
    crossorigin="anonymous" />
@endsection


@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-lg-11">
        <div class="row justify-content-around align-items-start py-5 mt-5">
            <div class="col-12 col-lg-5">
                @if ($article->pics()->exists())
                <div id="{{ 'carousel'.$article->id }}" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach ($article->pics as $indicator)
                        <li data-target="#{{ 'carousel'. $article->id }}" data-slide-to="{{ $loop->index }}"
                            class="{{ $loop->first ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                        @foreach ($article->pics as $pic)
                        <div class="carousel-item  {{ $loop->first ? 'active' : '' }}">
                            <img src="{{ asset($pic->path) }}" class="product-pic-carousel"
                                alt="{{ asset('img/brand/no_img_found.png') }}">

                        </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#{{ 'carousel'.$article->id }}" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#{{ 'carousel'.$article->id }}" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                @else
                <img src="{{ asset('img/brand/no_img_found.png') }}" alt="" class="img-fluid w-100">
                @endif
            </div>
            <div class="col-10 col-lg-6 pt-4 pt-lg-0">
                <h1 class="text-dark">
                    <small>{{ ucFirst($article->name) }}</small>
                </h1>
                <p class="text-justify ">
                    {{ $article -> description }}
                </p>
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="accordion" id="accordionExample">

                            @if ($article->aplications()->exists())
                            <div class="card border border-secondary my-4 pav-pill shadow p-0 py-1">
                                <div class="card-header p-0 bg-white border-0 bg-white" id="headingaplicaciones"> 
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-dark" type="button" data-toggle="collapse"
                                            data-target="#aplicaciones" aria-expanded="true"
                                            aria-controls="aplicaciones">
                                            <h6 class="">+&nbsp;Aplicaciones</h6>
                                        </button>
                                </div>

                                <div id="aplicaciones" class="collapse" aria-labelledby="headingaplicaciones"
                                    data-parent="#accordionExample">
                                    <div class="card-body text-dark">
                                        <div class="row">
                                            @foreach ($article->aplications as $aa)
                                            <div class="col-6 col-lg-3 text-dark text-center">

                                                <a href="" class="btn btn-sm text-dark d-block">
                                                    <img class="img-fluid"
                                                        src="{{ $aa->icon_path == null ? asset('img/brand/no_img_found.png') : asset($aa->icon_path)}}"
                                                        alt="">
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
                            <div class="card border border-secondary my-4 pav-pill shadow p-0 py-1">
                                <div class="card-header p-0 bg-white border-0" id="headingaplicaciones">
                       
                                        <button class="btn btn-link text-dark" type="button" data-toggle="collapse"
                                            data-target="#descargas" aria-expanded="true" aria-controls="descargas">
                                            <h6 class="">+&nbsp;Descargas</h6>
                                        </button>
                         
                                </div>

                                <div id="descargas" class="collapse" aria-labelledby="headingaplicaciones"
                                    data-parent="#accordionExample">
                                    <div class="card-body text-dark">
                                        @foreach ($article->downloads as $ad)
                                        <a href="{{ asset($ad->path) }}" class="btn btn-outline-dark" target="_blank">
                                            <i class="fas fa-file-download"></i>  <small>{{ucwords(str_replace('article_downloads/','',$ad->path))}}</small>
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @endif

                            @if ($article->specs != null)
                            <div class="card border border-secondary my-4 pav-pill shadow p-0 py-1">
                                <div class="card-header p-0 bg-white border-0" id="headingaplicaciones">
                        
                                        <button class="btn btn-link text-dark" type="button" data-toggle="collapse"
                                            data-target="#specs" aria-expanded="true" aria-controls="specs">
                                            <h6 class="">+&nbsp;Especificaciones</h6>
                                        </button>
                
                                </div>

                                <div id="specs" class="collapse" aria-labelledby="headingaplicaciones"
                                    data-parent="#accordionExample">
                                    <div class="card-body text-dark">
                                        @foreach (explode(',' , $article -> specs) as $esp)
                                            {{ $esp }} <br>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @endif

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span>¿Te interesa este producto?</span> <button class="btn btn-link color1 bold" type="button" data-toggle="modal" data-target="#staticBackdrop">Cotízalo</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center py-5 mt-5">
            <div class="col-2 col-lg-1 text-center">
                <button class="btn btn-link p-0" id="prodRelNextBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" viewBox="0 0 39.904 39.903">
                        <g id="Flecha" transform="translate(39.904 39.903) rotate(180)">
                          <path id="Trazado_22" data-name="Trazado 22" d="M620.986,945.293l-9.976-9.976-9.976-9.975H581.082l9.975,9.976,9.976,9.975h0l-9.974,9.975-9.976,9.976h19.951l9.977-9.976,9.975-9.976h0" transform="translate(-581.082 -925.342)" fill="#e40e20"/>
                        </g>
                      </svg>
                      
                    </button>
            </div>
            <div class="col-8">
                <h3 class="text-center bold mb-5 text-dark">Productos Relacionados</h3>
                <div class="owl-carousel">
                    @foreach ($article->category->articles as $a)
                    <div class="welcome-img-link text-center">
                        <a href="{{ route('front.producto',['family' => $fam->name, 'slug'=> $a->slug]) }}">
                            <img src="{{ $a->pics()->count() > 0 ? asset($a->pics()->first()->path) : asset('img/brand/no_img_found.png') }}"
                                class="menu-product-foto mb-2 shadow zoom" alt="">
                            <small class="text-dark ">
                                {{ $a->name }}
                            </small>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-2 col-lg-1 text-center">
                <button class="btn btn-link p-0" id="prodRelPrevBtn">
                    <svg id="Flecha" xmlns="http://www.w3.org/2000/svg" width="20px" viewBox="0 0 39.904 39.903">
                        <path id="Trazado_22" data-name="Trazado 22" d="M620.986,945.293l-9.976-9.976-9.976-9.975H581.082l9.975,9.976,9.976,9.975h0l-9.974,9.975-9.976,9.976h19.951l9.977-9.976,9.975-9.976h0" transform="translate(-581.082 -925.342)" fill="#e40e20"/>
                      </svg>
                      
                </button>
            </div>
        </div>
    </div>
</div>


  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        {{-- <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> --}}
        <div class="modal-body bg1 rounded">
            <form class="" action="{{ route('front.cotizacion.create') }}"  class="contact_form" method="POST" id="product_cotizar_modal_form">
                {{ csrf_field() }}
                <div class="form-group">
                  <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" placeholder="Nombre">
                  @if ($errors->has('nombre'))
                  <span class="help-block">
                       <small class="text-white">{{ $errors->first('nombre') }}</small>
                   </span>
                  @endif
                </div>
                 <div class="form-group">
                    <input type="email" class="form-control"  name="correo" value="{{ old('correo') }}" placeholder="correo">
                    @if ($errors->has('correo'))
                    <span class="help-block">
                         <small class="text-white">{{ $errors->first('correo') }}</small>
                     </span>
                    @endif
                 </div>
                 <div class="form-group">
                    <input type="text" id="disabledTextInput" class="form-control" disabled placeholder="{{ ucFirst($article->name) }}">
                    <input type="hidden" name="article_id" value="{{ $article->id }}">
                  </div>
               </form>
        </div>
        <div class="modal-footer bg1">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <a href="!#" class="btn btn-light" onclick="event.preventDefault();document.getElementById('product_cotizar_modal_form').submit();">Cotizar</a>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('page_scripts')
<script>
    $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                loop: true,
                touchDrag: true,
                responsive: {
                    // breakpoint from 768 up
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    1023: {
                        items: 5
                    }
                }
            });
            $('#prodRelNextBtn').click(function() {
                owl.trigger('next.owl.carousel');
            });

            // Go to the previous item
            $('#prodRelPrevBtn').click(function() {
                // With optional speed parameter
                // Parameters has to be in square bracket '[]'
                owl.trigger('prev.owl.carousel', [300]);
            });
        });
</script>
@endsection