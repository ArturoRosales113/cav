@extends('backend.layouts.app')

@section('page_title')
{{ $aplication->display_name }}
@endsection

@section('dashboard_buttons')
<a class="btn btn-sm btn-secondary" href="{{ route('aplication.index') }}">
 <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de aplicacione
</a>
@endsection

@section('content')
<div class="row justify-content-center py-3">
    <div class="col-10">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">
                    {{ $aplication->name }}
                </h2>
            </div>

        </div>
    </div>
</div>

@endsection
