@extends('frontend.layoutsR.app')

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
    <div class="col-11 col-lg-9">
        <div class="row py-3">
            <div class="col-12 col-lg-3 text-center">

                <div class="accordion" id="accordionNoticias">

                    @foreach ($dates->sortkeysdesc() as $year=>$posts)

                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link-dark w-100" type="button" data-toggle="collapse"
                                    data-target="{{'#collapse'.str_replace(' ', '', $year)}}" aria-expanded="true"
                                    aria-controls="{{'collapse'.str_replace(' ', '', $year) }}">
                                    {{ $year }}
                                </button>
                            </h2>
                        </div>

                        <div id="{{'collapse'.str_replace(' ', '', $year) }}" class="collapse"
                            aria-labelledby="headingOne" data-parent="#accordionNoticias">

                            <div class="card-body text-left">

                                <ul class="list-group list-group-flush">
                                    @foreach ($posts as $p)
                                    <li class="list-group-item text-left">
                                        <a href="{{ route('front.residencial.noticia', $p->slug) }}"
                                            class="btn btn-link text-dark text-left">
                                            {{ $p->title }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
            <div class="col-12 col-lg-9 pt-5 pt-lg-0">
                @foreach ($noticias as $n)
                <a href="{{ route('front.residencial.noticia', $n -> slug) }}"
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