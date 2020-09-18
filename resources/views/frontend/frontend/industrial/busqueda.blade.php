@section('content')
@extends('frontend.layouts.app')




@section('content')
<div class="row justify-content-center align-items-center py-5 min-vh-100">
    <div class="col-10">
        @if ($articles->count() > 0)
        <h3>Productos</h3>
        <div class="list-group">
            @foreach ($articles as $a)
            <a href="{{ route('front.industrial.producto', $a -> slug) }}"
                class="list-group-item list-group-item-action">
                <div class="row">
                    <div class="col-12 col-lg-3 mb-2 mb-lg-0">
                        <img src="{{ $a->pics()->count() > 0 ? asset($a->pics()->first()->path) : asset('img/brand/no_img_found.png') }}"
                            class="img-fluid" alt="">
                    </div>
                    <div class="col-12 col-lg-9">
                        <h4>{{ $a->name }}</h4>
                        <p> {{ preg_replace('/\s+?(\S+)?$/', '', substr($a->description, 0, 100)) }}
                        </p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        @endif

        @if ($posts->count() > 0)
        <h3>Noticias:</h3>
        <div class="list-group">
            @foreach ($posts as $n)
            <a href="{{ route('front.industrial.noticia', $n -> slug) }}"
                class="list-group-item list-group-item-action">
                <div class="row">
                    <div class="col-12 col-lg-3 p-0 p-lg-2">
                        <img src="{{ $n->img_path == null ? asset('img/brand/no_img_found.png') : asset() }}"
                            class="img-fluid" alt="">
                    </div>
                    <div class="col-12 col-lg-9 py-3 py-lg-0">
                        <h4>{{ preg_replace('/\s+?(\S+)?$/', '', substr($n->title, 0, 50)) }}</h4>
                        <p class="text-justify d-block">
                            {{ preg_replace('/\s+?(\S+)?$/', '', substr($n->body, 0, 70)) }}
                        </p>
                    </div>
                </div>
            </a>
            @endforeach 
        </div>
        @endif

        @if($articles->count() == 0 && $posts->count() == 0)
        <h1> 
            <small>Lo sentimos,</small> <br>
            La búsqueda no tuvo resultados
        </h1>
        @endif
    </div>
</div>
@endsection