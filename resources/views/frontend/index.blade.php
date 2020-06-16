@extends('frontend.layouts.app')



@section('content')
<div class="row justify-content-center align-items-center min-vh-100" style="background-image: url('{{asset('img/home_background.jpg')}}')">
    <div class="col-8 text-center">
        <img src="{{ asset('img/logos/logo1.png') }}" alt="">
        <div class="row pt-5">
            <div class="col-6">
                <ul class="list-group-flush bg-transparent">
                    <li class="list-group-item bg-transparent">Cras justo odio</li>
                    <li class="list-group-item bg-transparent">Dapibus ac facilisis in</li>
                    <li class="list-group-item bg-transparent">Morbi leo risus</li>
                    <li class="list-group-item bg-transparent">Porta ac consectetur ac</li>
                    <li class="list-group-item bg-transparent">Vestibulum at eros</li>
                  </ul>
            </div>
            <div class="col-6">
                <ul class="list-group-flush bg-transparent">
                    <li class="list-group-item bg-transparent">Cras justo odio</li>
                    <li class="list-group-item bg-transparent">Dapibus ac facilisis in</li>
                    <li class="list-group-item bg-transparent">Morbi leo risus</li>
                    <li class="list-group-item bg-transparent">Porta ac consectetur ac</li>
                    <li class="list-group-item bg-transparent">Vestibulum at eros</li>
                  </ul>
            </div>
        </div>
    </div>
</div>
@endsection
