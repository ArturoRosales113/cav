@extends('backend.layouts.app')

@section('page_title')
Mensajes
@endsection



@section('dashboard_buttons')
<a class="btn btn-sm btn-success text-white" href="{{ route('banner.create') }}"><i
        class="fas fa-plus-square"></i>&nbsp;Crear Banner</a>
@endsection

@section('content')
<div class="row my-5 justify-content-center">
    <div class="col-10">
        <div class="list-group">
            @foreach ($mensajes as $m)
            <a href="{{ route('mensaje.show', $m->id) }}" class="list-group-item list-group-item-action item-secondary">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">{{ $m->nombre }}</h5>
                  <small>{{ $m->created_at }}</small>
                </div>
                <p class="mb-1">{{ ucwords($m->interes) }}</p>
              </a>
            @endforeach
        </div>
    </div>
</div>

@endsection