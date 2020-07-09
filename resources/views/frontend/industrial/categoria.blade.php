@section('content')
@extends('frontend.layouts.app')


@section('content')
<div class="row justify-content-center align-items-center py-5 vh-100">
    <p class="p-5">
        {{ $category->articles }}
    </p>
</div>
@endsection