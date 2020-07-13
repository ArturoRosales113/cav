@extends('frontend.layouts.app')


@section('content')
<div class="row justify-content-center align-items-start py-5">
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
<div class="row">

</div>
@endsection