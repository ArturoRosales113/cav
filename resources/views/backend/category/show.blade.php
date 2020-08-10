@extends('backend.layouts.app')



@section('page_title')
{{ ucwords($category->display_name) }}
@endsection



@section('dashboard_buttons')
<a class="btn btn-sm btn-secondary" href="{{ route('category.index') }}">
 <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de familias
</a>
@endsection


@section('content')
    <div class="row">
        <div class="col-10">
            @include('backend.category.edit', ['families' => $families])
        </div>
    </div>
@endsection


@section('modals')
    @include('backend.layouts.slices.destroyModal', ['model' => $categories])
@endsection
