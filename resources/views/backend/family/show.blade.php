@extends('backend.layouts.app')

@section('page_title')
{{ $family->display_name }}
@endsection



@section('dashboard_buttons')
<a class="btn btn-sm btn-secondary" href="{{  URL::previous()  }}"> <i class="fas fa-arrow-left"></i>&nbsp;Volver a
    listado de familias </a>
@endsection

@section('content')
<div class="row justify-content-center py-3">
    <div class="col-10">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">
                    {{ $family->display_name }}
                </h2>
            </div>
            <div class="card-body">
                <hr>
                @include('backend.family.edit',['family' => $family])
            </div>
        </div>
    </div>
</div>
@endsection


@section('modals')
@include('backend.layouts.slices.destroyModal', ['model' => $families])
@endsection