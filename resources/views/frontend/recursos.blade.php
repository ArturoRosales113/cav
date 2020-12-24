@extends('frontend.layouts.app')

@section('page_title')
Recursos
@endsection

@section('content')
<div class="row py-5 mt-5 justify-content-center">
    <div class="col-10">
        <h1 class="text-dark bold">Recursos</h1>
    </div>
</div>
@foreach ($fam->categories as $c)
@if ($c->downloads()->exists())
<div class="row justify-content-center">
    <div class="col-10">
        <h3 class="text-dark">
            {{ucwords($c->display_name)}}
        </h3>
        <div class="row row-cols-sm-2 row-cols-md-4">
            @foreach ($c->articles as $art)
            @if ($art->downloads()->exists() )
            <div class="col-6 col-lg-4 mb-4">
                <div class="card">
                    <img src="{{ $art->pics()->count() > 0 ? asset($art->pics()->first()->path) : asset('img/brand/no_img_found.png') }}"
                        class="card-img-top recursos-img" alt="">
                    <div class="card-body p-0 px-2">
                        <small class="card-title">{{ucFirst($art->name)}}</small>
                        <ul class="list-group list-group-flush">

                            @foreach ($art->downloads as $ad)
                            <li class="list-group-item">
                                <a href="{{asset($ad->path)}}"
                                    class="btn btn-link rounded-pill text-dark text-capitalize">
                                    <small>{{str_replace('article_downloads/','',$ad->path)}}</small>
                                </a>
                            </li>
                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>

@endif
@endforeach
@endsection