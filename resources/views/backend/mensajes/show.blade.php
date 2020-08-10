@extends('backend.layouts.app')

@section('page_title')
{{ $mensaje->nombre }}, está interesado en {{ $mensaje->interes }}:
@endsection



@section('dashboard_buttons')
<a class="btn btn-sm btn-success text-white" href="{{ route('mensaje.index') }}"><i
        class="fas fa-plus-square"></i>&nbsp;Volver  al listado de mensajes</a>
@endsection

@section('content')
<div class="row my-5 justify-content-center">
    @if ($mensaje->mensaje != null)
    <div class="col-10">
        <h4 class="bold">
            En el mensaje nos dijo:
        </h4>
        <p>
            {{ $mensaje->mensaje }}
        </p>
    </div>
    @endif
    @if ($mensaje->articles()->exists())
    <div class="col-10">
        <h4>Está interesado en el producto</h4>
        @foreach ($mensaje->articles as $art)
            {{ $art->name }}
        @endforeach
    </div>
    @endif

    <div class="col-10">
        <h4>Responder al correo</h4>
        <a class="btn btn-sm btn-secondary" href="mailto:{{ $mensaje->correo }}">{{ $mensaje->correo }}</a>
    </div>
</div>

@endsection