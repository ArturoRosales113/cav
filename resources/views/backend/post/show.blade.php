@extends('backend.layouts.app')

@section('page_title')
{{ $post->title }}
@endsection



@section('dashboard_buttons')
<a class="btn btn-sm btn-secondary text-white" href="{{ route('post.index') }}">
    <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de articulos
</a>
@endsection

@section('content')
<div class="row">
    <div class="col-10">
        @include('backend.post.edit', [
            'post' => $post,
            'families' => $families
            ])
    </div>
</div>

@endsection