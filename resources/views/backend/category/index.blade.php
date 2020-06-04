@extends('backend.layouts.app')

@section('page_title')
Categorías
@endsection



@section('dashboard_buttons')
<a class="btn btn-sm btn-success text-white" href="{{ route('category.create') }}"><i class="fas fa-plus-square"></i>&nbsp;Crear categoría</a>
@endsection

@section('content')
    @include('backend.layouts.products_dashboard_menu')
    <div class="row">
        <div class="col-10">

        </div>
    </div>
@endsection

