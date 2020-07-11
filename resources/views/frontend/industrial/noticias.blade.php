@extends('frontend.layouts.app')

@section('page_title')
Noticias
@endsection

@section('content')
<div class="row justify-content-center py-5">
    <div class="col-10">
        <div class="row py-3">
            <div class="col-3 text-center">

                @foreach ($dates as $year=>$months)
                <div class="media">
                    <div class="media-body">
                        <h5 class="mt-0">{{ $year }}</h5>
                        @foreach ($months as $month=>$posts)
                        <div class="media mt-3">
                            <div class="media-body">
                                <h5 class="mt-0">{{ $month }}</h5>
                                <ul>
                                    @foreach ($posts as $p)
                                    <li>{{ $p->title }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>



                @endforeach


            </div>
            <div class="col-9">
                @foreach ($noticias as $n)
                <a href="{{ route('front.industrial.noticia', $n -> slug) }}"
                    class="list-group-item list-group-item-action">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{ $n->img_path == null ? asset('img/brand/no_img_found.png') : asset() }}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-9">
                            <h4>{{ preg_replace('/\s+?(\S+)?$/', '', substr($n->title, 0, 50)) }}</h4>
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
</div>
@endsection