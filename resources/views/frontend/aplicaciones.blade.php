@extends('frontend.layouts.app')



@section('content')
<div class="row justify-content-center py-5">
    <div class="col-12 col-md-10">
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

                            <div class="col-12 col-lg-8">
                                <h4 class="bold text-dark text-center py-4">
                                    {{ ucFirst($at->name)}}
                                </h4>
                                <img class="img-fluid w-100"
                                    src="{{ $at->img_path == null ? asset('img/brand/no_img_found.png') : asset($at->img_path) }}"
                                    alt="{{ $at->name }}" id="">
                          
                                {{-- <p class="p-3 text-justify">
                                    {{ $at->description }}
                                </p> --}}
                                <div class="row py-3">
            
                                </div>
                            </div>

                            <div class="col-lg-2 pt-4">
                                <ul class="list-unstyled">
                                    <li class="text-center">
                                        <span class="text-dark">Productos utilizados</span>
                                    </li>
                                    @foreach ($at->articles as $atA)
                                    <li class="text-dark">
                                        <a href="{{ route('front.producto', ['family' => $fam->name, 'slug' => $atA->slug]) }}" class="btn btn-link text-dark text-left w-100">
                                            <i class="fas fa-chevron-right color1"></i> {{ $atA -> name }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
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