@extends('frontend.layouts.app')

@section('page_title')
Noticias
@endsection

@section('content')
<div class="row py-5 mt-5 justify-content-center">
    <div class="col-10">
        <h1 class="text-dark bold">Recursos</h1>
    </div>
</div>
    @foreach ($categories as $c)
    <div class="row justify-content-center">
        <div class="col-10">
            <h3 class="text-dark">
                {{ucFirst($c->display_name)}}
            </h3>
            <div class="row row-cols-md-5">
                @foreach ($c->articles as $art)
                <div class="col mb-4">
                    <div class="card">
                        <img src="{{ $art->pics()->count() > 0 ? asset($art->pics()->first()->path) : asset('img/brand/no_img_found.png') }}"
                        class="card-img-top" alt="">
                      <div class="card-body">
                        <h6 class="card-title"><small>{{ucFirst($art->name)}}</small></h6>
                        <ul class="list-group list-group-flush">
                           
                            @foreach ($art->downloads as $ad)
                            <li class="list-group-item">
                                <a href="{{$ad->path}}" class="btn btn-sm text-white bg1">Descarga {{$loop->iteration}}</a>
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
    @endforeach
@endsection