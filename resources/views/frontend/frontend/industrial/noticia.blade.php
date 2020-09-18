@extends('frontend.layouts.app')

@section('page_title')
{{ $noticia->title }}
@endsection

@section('content')
<div class="row justify-content-center py-5 mt-lg-2">
    <div class="col-10 col-lg-7">
        <h1>{{ $noticia->title }}</h1>
        <hr>
        <img src="{{ $noticia->img_path == null ? asset('img/brand/no_img_found.png') : asset($noticia->img_path) }}"
            class="img-fluid w-100">
        <p class="text-justify p-5">
            {!! $noticia->body !!}
        </p>
    </div>
</div>
</div>
@endsection