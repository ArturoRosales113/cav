<div id="mySidenavContainer">
    <div id="mySidenav" class="sidenav d-lg-none">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="{{ route('front.index') }}">HOME</a>
        <a href="{{ route('front.vestidos') }}">Categorías</a>
        @foreach ($concepts as $c)
        <a class="ml-3" href="{{route('front.concepto',$c -> name)}}">{{$c -> display_name}}</a>
        @endforeach
        {{-- <a href="{{ route('front.outlet') }}">Outlet</a> --}}
        <a href="{{ route('front.nosotros') }}">Nosotros</a>
        <a href="{{ route('front.contacto') }}">Contacto</a>
        <div class="row justify-content-center py-3">

        </div>
    </div>
</div>