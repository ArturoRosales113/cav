@extends('backend.layouts.app')

@section('page_title')
Productos
@endsection



@section('dashboard_buttons')
<a class="btn btn-sm btn-success text-white" href="{{ route('article.create') }}"><i
        class="fas fa-plus-square"></i>&nbsp;Crear producto nuevo</a>
@endsection

@section('content')

@include('backend.layouts.products_dashboard_menu')
<div class="row my-5 justify-content-center">
    <div class="col-12 col-lg-10">
        <div class="list-group-flush">
            <li class="list-group-item d-block justify-content-between align-items-center">
                <div class="row">
                    <div class="col-5">
                        <h6>Artículos</h6>
                    </div>
                </div>
            </li>
            @foreach ($articles as $a)
            <li class="list-group-item d-block justify-content-between align-items-center">
                <div class="row align-items-center">
                    <div class="col">
                        <img src="{{ $a->pics()->count() > 0 ? asset($a->pics()->first()->path) : asset('img/brand/no_img_found.png') }}"
                            class="img-fluid" alt="">
                    </div>
                    <div class="col-9">
                        <h6>
                            {{$a -> name }}
                        </h6>

                        <div class="row">

                            <a class="btn btn-warning ml-2" href="{{route('article.show',$a -> id)}}">
                                <i class="fas fa-eye"></i>
                            </a>

                            <button type="button" class="btn btn-danger ml-2" data-toggle="modal"
                                data-target="#eraseModal" data-route="{{ route('article.destroy', $a -> id ) }}"
                                data-title="{{ $a -> dname }}" data-id="{{ $a -> id }}">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </div>
    </div>
</div>

@endsection