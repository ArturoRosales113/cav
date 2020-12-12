@extends('frontend.layouts.app')

@section('page_title')
Noticias
@endsection


@section('content')
<div class="row justify-content-center py-5">
    <div class="col-11 col-lg-9">
        <div class="row py-3">
            <div class="col-12 col-lg-3 text-center">

                <div class="accordion" id="accordionNoticias">



                </div>

            </div>
            <div class="col-12 col-lg-9 pt-5 pt-lg-0">
                @foreach ($fam->posts as $n)
                <a href="{{ route('front.noticia', ['family' => $fam->name, 'slug' => $n -> slug]) }}"
                    class="list-group-item list-group-item-action">
                    <div class="row">
                        <div class="col-12 col-lg-3 p-0 p-lg-2">
                            <img src="{{ $n->img_path == null ? asset('img/brand/no_img_found.png') : asset($n->img_path) }}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-12 col-lg-9 py-3 py-lg-0">
                            <h4>{{ preg_replace('/\s+?(\S+)?$/', '', substr($n->title, 0, 50)) }}</h4>
                            <p class="text-justify d-block">
                                {!! preg_replace('/\s+?(\S+)?$/', '', substr($n->body, 0, 70)) !!}
                            </p>
                        </div>
                    </div>
                </a>
                @endforeach
                {{-- <div class="row py-3">
                    <div class="col">
                        {{ $noticias->render() }}
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection