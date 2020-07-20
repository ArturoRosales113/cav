@section('content')
@extends('frontend.layoutsR.app')




@section('content')
<div class="row justify-content-center align-items-center py-5">
    <div class="col-10">
        <ul class="list-group">

            <h6>Articles</h6>

            @foreach ($articles as $a)
            <li>
                <a href="">
                    {{ $a->name }}
                </a>
            </li>
            @endforeach


            <h6>Posts</h6>

            @foreach ($posts as $p)
            <li>
                <a href="">
                    {{ $p->title }}
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection