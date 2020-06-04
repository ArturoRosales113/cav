@extends('backend.layouts.app')

@section('page_title')
Familias
@endsection



@section('dashboard_buttons')
<a class="btn btn-sm btn-success text-white" href="{{ route('family.create') }}"><i class="fas fa-plus-square"></i>&nbsp;Crear familia</a>
@endsection

@section('content')
    @include('backend.layouts.products_dashboard_menu')
    <div class="row p-5">
        @foreach ($families as $f)
        <div class="col-10 col-lg-4 mb-4">
            <div class="card bg-dark text-white">
                <img class="card-img" src="{{ $f->img_path =! null ? asset('img/brand/no_img_found.png') : $f->img_path  }}" alt="Card image">
                <div class="card-img-overlay">
                    <h5 class="card-title">{{  $f->display_name}}</h5>
                    <p class="card-text">{{ $f->description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection

