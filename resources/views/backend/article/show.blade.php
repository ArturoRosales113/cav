@extends('backend.layouts.app')

@section('page_title')
{{ $article->display_name }}
@endsection

@section('dashboard_buttons')
<a class="btn btn-sm btn-secondary" href="{{ route('article.index') }}">
 <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de articulos
</a>
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                
            </div>
        </div>
    </div>
    <div class="col-6">

    </div>
</div>
@endsection
