@extends('frontend.layoutsR.app')

@section('page_title')
Noticias
@endsection

@section('content')
<div class="row justify-content-center py-5">
    <div class="col-10">
        <div class="row py-3">
            <div class="col-3 text-center">
                <ul class="list-group" id="aplicaciones-menu">

                </ul>
                <br>
                <a href="" class="btn text-white bg1 w-100">Contactanos</a>
            </div>
            <div class="col-9">
                @foreach ($noticias as $n)
                <a href="{{ route('front.residencial.noticia', $n -> slug) }}"
                    class="list-group-item list-group-item-action">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{ $n->img_path == null ? asset('img/brand/no_img_found.png') : asset() }}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-9">
                            <h4>{{ $n->title }}</h4>
                            <p class="text-justify">{{ preg_replace('/\s+?(\S+)?$/', '', substr($n->body, 0, 201)) }}
                            </p>
                        </div>
                    </div>
                </a>
                @endforeach
                <div class="row py-3">
                    <div class="col">
                        {{ $noticias->render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection