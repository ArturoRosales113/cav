@extends('frontend.layoutsR.app')


@section('page_banner')
<div class="row aplications align-items-center">
    <div class="col text-center text-white">
        <h4 class="bold">Aplicaciones</h4>
    </div>
</div>
@endsection


@section('content')
<div class="row justify-content-center py-5">
    <div class="col-12 col-md-10 col-lg-11">
        <div class="row">
            <div class="col-12 col-lg-2 pt-lg-4">
                <div class="nav flex-row flex-lg-column nav-pills" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    <div class="py-2 bg1 w-100">
                    </div>
                    @foreach ($aplicaciones as $ap)
                    <a class="nav-link bg3 text-dark px-lg-5 py-lg-3 flex-fill m-2 m-lg-0 {{ $loop -> first ? 'active' : '' }}"
                        id="{{ 'pill-'.$ap -> display_name }}" data-toggle="pill"
                        href="{{ '#tab-'.$ap -> display_name }}" role="tab" aria-controls="v-pills-home"
                        {{ $loop->first ? 'aria-selected="true"' : '' }}>
                        {{ ucFirst($ap->name) }}
                    </a>
                    @endforeach
                </div>
                <div class="py-3">
                    <a href="{{ route('front.industrial.contacto') }}" class="btn text-white bg1 w-100">Contáctanos</a>
                </div>
            </div>
            <div class="col-12 col-lg-10">
                <div class="tab-content" id="v-pills-tabContent">
                    @foreach ($aplicaciones as $at)
                    <div class="tab-pane fade show {{ $loop -> first ? 'active' : '' }}"
                        id="{{ 'tab-'.$at -> display_name }}" role="tabpanel"
                        aria-labelledby="{{ '#pill-'. $at -> display_name }}">
                        <div class="row">

                            <div class="col-12 col-lg-12">
                                <h4 class="bold text-dark text-center text-lg-left">
                                    {{ ucFirst($at->name)}}
                                </h4>
                                <img class="img-fluid w-100"
                                    src="{{ $at->img_path == null ? asset('img/brand/no_img_found.png') : asset($at->img_path) }}"
                                    alt="{{ $at->name }}" id="">
                                <hr>
                                {{-- <p class="p-3 text-justify">
                                    {{ $at->description }}
                                </p> --}}
                                <div class="row py-3">
                                    <div class="col">
                                        <ul class="list-unstyled">
                                            <li class="text-dark">
                                                <h5 class="bold text-dark">Productos</h5>
                                            </li>
                                            @foreach ($at->articles as $atA)
                                            <li class="text-dark">
                                                <a href="{{ route('front.residencial.producto', $atA -> slug) }}" class="btn btn-link text-dark text-left w-100">
                                                    <i class="fas fa-chevron-right color1"></i> {{ $atA -> name }}
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
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