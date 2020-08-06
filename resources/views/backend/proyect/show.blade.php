@extends('backend.layouts.app')

@section('page_title')
{{ $proyect->display_name }}
@endsection

@section('dashboard_buttons')
<a class="btn btn-sm btn-secondary" href="{{ route('proyect.index') }}">
    <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de proyectos
</a>
@endsection

@section('content')

<div class="row justify-content-center py-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                    Editar información
                </h4>
            </div>
            <div class="card-body">
                @include('backend.proyect.edit')
            </div>

        </div>
    </div>
</div>
@endsection