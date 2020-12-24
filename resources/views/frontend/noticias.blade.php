@extends('frontend.layouts.app')

@section('page_title')
Noticias
@endsection


@section('content')
<div class="row justify-content-center py-5">
    <div class="col-11 col-lg-9">
        <div class="row py-5 no-gutters">
            @foreach ($fam->posts as $n)
            <div class="col-12 col-lg-6 mb-2 mb-lg-0">
                <div class="card bg-dark text-white">
                    <img src="{{ $n->img_path == null ? asset('img/brand/no_img_found.png') : asset($n->img_path) }}"
                        class="card-img" alt="...">
                    <div
                        class="card-img-overlay w-100 h-100 d-flex align-items-end p-0  {{ $loop->iteration%2 == 0 ? 'justify-content-end' : 'justify-content-start'  }}">
                        <div class="bg1 p-3" style="min-height: 50%;width:60%;">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="card-title">
                                        {{ preg_replace('/\s+?(\S+)?$/', '', substr($n->title, 0, 50)) }}
                                    </h5>
                                    <small class="card-text">
                                        {!! preg_replace('/\s+?(\S+)?$/', '', substr($n->body, 0, 70)) !!}
                                    </small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">

                                </div>
                                <div class="col text-right">
                                    <a href="{{ route('front.noticia', ['family' => $fam->name, 'slug' => $n -> slug]) }}"
                                        class="btn btn-link text-white bold">
                                        Ver más
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection