@extends('backend.layouts.app')

@section('page_title')
Banners
@endsection



@section('dashboard_buttons')
<a class="btn btn-sm btn-success text-white" href="{{ route('banner.create') }}"><i
        class="fas fa-plus-square"></i>&nbsp;Crear Banner</a>
@endsection

@section('content')
<div class="row justify-content-center p-4">
    <div class="col-10 col-lg-10">
        <div class="list-group-flush">
            @foreach ($banners as $c)
            <li class="list-group-item d-block justify-content-between align-items-center">
                <div class="row">
                    <div class="col-3">
                        <img src="{{ $c->img_path == null ? asset('img/brand/no_img_found.png') : asset($c->img_path) }}"
                            class="img-fluid" alt="">
                    </div>
                    <div class="col-9">
                        <h5>{{ $c->titulo }}</h5>
                        <p>
                            {{$c->url}}
                        </p>
                        <div class="row align-items-stretch justify-content-end">
                            <form action="{{ route('banner.destroy', $c->id) }}" method="POST">
                                @method('delete')
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="delete" />
                                <button type="submit" class="btn btn-danger">
                                    Eliminar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </div>
    </div>
</div>

@endsection