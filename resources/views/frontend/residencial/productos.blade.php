@extends('frontend.layoutsR.app')

@section('page_title')
Productos
@endsection


@section('page_banner')
<div class="row products align-items-center">
    <div class="col text-center text-white">
        <h4 class="bold">una gama completa de sistemas automáticos</h4>
    </div>
</div>
@endsection



@section('content')
<section>
    <div class="row justify-content-around aling-items-center py-5">
        <div class="col-lg-3">
            <div class="accordion" id="products_collapse">
                @foreach ($categories as $c)
                <div class="card">
                    <div class="card-header" id="{{ $c -> name.'-heading' }}">
                        <button class="btn btn-link text-left text-uppercase text-dark" type="button"
                            data-toggle="collapse" data-target="{{ '#'.$c -> name.'-collapse' }}"
                            aria-controls="{{ $c -> name.'-collapse' }}" aria-expanded="false">
                            <small> {{ $c -> display_name }}</small>
                        </button>
                    </div>

                    <div id="{{ $c -> name.'-collapse' }}" class="collapse"
                        aria-labelledby="{{ '#'.$c -> name.'-heading' }}" data-parent="#products_collapse">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                @foreach ($c->articles as $ca)
                                <li class="list-group-item">
                                    <a href="{{ route('front.residencial.producto', $ca -> slug) }}">
                                        <small class="text-dark">
                                            {{ $ca->name }}
                                        </small>
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
        <div class="col-8">
            <div class="list-group">
                @foreach ($articles as $a)
                <a href="{{ route('front.residencial.producto', $a -> slug) }}"
                    class="list-group-item list-group-item-action">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{ $a->pics->count() > 0 ? asset($a->pics()->first()->path) : asset('img/brand/no_img_found.png') }}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-9">
                            <h4>{{ $a->name }}</h4>
                            <p> {{ preg_replace('/\s+?(\S+)?$/', '', substr($a->description, 0, 100)) }}
                            </p>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            <div class="row justify-content-center py-5">
                <div class="col-10 text-center">
                    {{ $articles->render() }}
                </div>
            </div>
        </div>
    </div>

</section>
@endsection