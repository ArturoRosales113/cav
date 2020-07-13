@extends('frontend.layouts.app')

@section('page_title')
Noticias
@endsection

@section('page_banner')
<div class="row noticias align-items-center">
    <div class="col text-center text-white">
        <h4 class="bold">Noticias</h4>
    </div>
</div>
@endsection

@section('content')
<div class="row justify-content-center py-5">
    <div class="col-10 col-lg-9">
        <div class="row py-3">
            <div class="col-3 text-center">

                <div class="accordion" id="accordionExample">

                    @foreach ($dates->sortkeysdesc() as $year=>$months)
                    @foreach ($months->sortkeys() as $month=>$posts)
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link-dark w-100" type="button" data-toggle="collapse"
                                    data-target="{{'#collapse'.str_replace(' ', '', $month)}}" aria-expanded="true"
                                    aria-controls="{{'collapse'.str_replace(' ', '', $month) }}">
                                    {{ $month }}
                                </button>
                            </h2>
                        </div>

                        <div id="{{'collapse'.str_replace(' ', '', $month) }}" class="collapse"
                            aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                @foreach ($posts as $p)
                                <a href="{{ route('front.industrial.noticia', $p->slug) }}"
                                    class="btn btn-link text-dark">
                                    {{ $p->title }}
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @if(!$loop->last)
                    <hr>
                    @endif

                    @endforeach

                </div>

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
                            <p class="text-justify d-block">
                                {{ preg_replace('/\s+?(\S+)?$/', '', substr($n->body, 0, 70)) }}
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