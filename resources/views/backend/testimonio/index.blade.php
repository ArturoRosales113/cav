@extends('backend.layouts.app')
@section('content')
 <!-- Navbar -->
 @include('backend.layouts.navbars.nav_expand')
<!-- Header -->
<div class="panel-header panel-header-md">
 <div class="header text-center">
  <h2 class="title">Testimonios de clientes</h2>
 </div>
</div>
<!-- Header -->

<!-- Toolbar -->
<div class="row my-5 justify-content-end align-items-center px-4">
 <div class="col col-md-4 text-center">
  <h6>Crear Testimonio</h6>
  <a class="btn btn-secondary" href="{{route('testimonio.create')}}"><i class="fa fa-plus"></i>&nbsp;Crear Línea</a>
 </div>
</div>
<!-- Toolbar -->

<!-- Tabla -->
<div class="content">
 <div class="row justify-content-center align-items-center">
     <div class="col-1">
        <a class="btn btn-link text-dark" href="#testimonios" role="button" data-slide="prev">
            <
        </a>
    </div>
    <div class="col-10">
        <div id="testimonios" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($testimonios as $t)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <div class="card text-center p-5 m-0">
                        <div class="card-body">
                          <h5 class="card-title">{{$t->testimonio }}</h5>
                          <p class="card-text">{{ $t->nombre }}</p>
                          {{  Form::open([ 'method'  => 'delete', 'route' => [ 'testimonio.destroy', $t->id ] ])}}
                          {{ Form::submit('Eliminar', ['class' => 'btn btn-danger']) }}
                      {{ Form::close() }}
                        </div>
                      </div>
                </div>
                @endforeach


            </div>
          </div>

    </div>
    <div class="col-1">
        <a class="btn btn-link text-dark" href="#testimonios" role="button" data-slide="next"> >
          </a>
    </div>
 </div>
</div>
<!-- Tabla -->


 @include('backend.layouts.footers.footer')
@endsection
