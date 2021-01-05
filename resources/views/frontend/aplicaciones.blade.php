@extends('frontend.layouts.app')



@section('content')
<div class="row justify-content-center py-5">
    <div class="col-12 col-md-11">
        <div class="row">
            <div class="col-12 col-lg-2 pt-lg-5">
                <div class="nav flex-row flex-lg-column nav-pills mt-5" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    @foreach ($fam->aplications as $ap)
                    <a class="pav-pill white mb-3 text-center shadow {{ $loop -> first ? 'active' : '' }}"
                        id="{{ 'pill-'.$ap -> display_name }}" data-toggle="pill"
                        href="{{ '#tab-'.$ap -> display_name }}" role="tab" aria-controls="v-pills-home"
                        {{ $loop->first ? 'aria-selected="true"' : '' }}>
                        <small> {{ ucFirst($ap->name) }}</small>
                    </a>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-lg-10">
                <div class="tab-content" id="v-pills-tabContent">
                    @foreach ($fam->aplications as $at)
                    <div class="tab-pane fade show {{ $loop -> first ? 'active' : '' }}"
                        id="{{ 'tab-'.$at -> display_name }}" role="tabpanel"
                        aria-labelledby="{{ '#pill-'. $at -> display_name }}">
                        <div class="row">

                            <div class="col-12 col-lg-9">
                                <h4 class="bold text-dark text-center py-4">
                                    {{ ucFirst($at->name)}}
                                </h4>
                                <img class="img-fluid w-100"
                                    src="{{ $at->img_path == null ? asset('img/brand/no_img_found.png') : asset($at->img_path) }}"
                                    alt="{{ $at->name }}" id="">
                                <div class="row py-4">
                                    <div class="col-12">
                                        <div class="tab-content" id="v-pills-tabContent">
                                           
                                            @foreach ($at->articles as $atA)
                                            <div class="tab-pane fade show {{$loop->first ? 'active' : ''}}" id="v-pills-{{ $at->display_name }}articles-{{ $atA->id }}" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <img src="{{ $atA->pics()->count() > 0 ? asset($atA->pics()->first()->path) : asset('img/brand/no_img_found.png') }}" alt="" class="aplications-article">
                                                    </div>
                                                    <div class="col-9 text-center">
                                                        <p class="text-justify">
                                                            <span class="bold text-dark">
                                                                {{ $atA->name }}
                                                            </span>
                                                            <br>
                                                            <small class="">
                                                                {{ $atA->description }}
                                                            </small>
                                                        </p>
                                                        <a href="{{ route('front.producto', [$fam->display_name,$atA -> slug]) }}" class="btn rounded-pill bg2" >
                                                            <small class="text-white">Ver producto</small>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
        
                                            @endforeach
                                          </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 pt-5 ">
                                <span class="text-dark mb-2">Productos utilizados</span>
                                <div class="aplications-product-container">
                                    <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    @foreach ($at->articles as $atA)
                                    <a class="nav-link {{$loop->first ? 'active' : ''}}" id="v-pills-home-tab"
                                        datA-toggle="pill" href="#v-pills-{{ $at->display_name }}articles-{{ $atA->id }}" role="tab" aria-controls="v-pills-articles-{{ $atA->id }}"
                                        aria-selected="{{$loop->first ? 'true' : 'false'}}">
                                        <img src="{{ $atA->pics()->count() > 0 ? asset($atA->pics()->first()->path) : asset('img/brand/no_img_found.png') }}" alt="" class="aplications-article">
                                        <small class="text-center text-dark">{{ $atA -> name }}</small>
                                    </a>

                                    @endforeach
                                </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection