@section('content')
@extends('frontend.layouts.app')


@section('content')
<div class="row justify-content-center align-items-center py-5 vh-100">
    @foreach ($articles as $a)
    <li>
        <a href="">
            {{ $a->name }}
        </a>
    </li>
    @endforeach


    @foreach ($posts as $p)
    <li>
        <a href="">
            {{ $p->title }}
        </a>
    </li>
    @endforeach
</div>
@endsection