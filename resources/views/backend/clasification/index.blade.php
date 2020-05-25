@extends('backend.layouts.app')
@section('content')
 <!-- Navbar -->
 @include('backend.layouts.navbars.nav_expand')
<!-- Header -->
<div class="panel-header panel-header-md">
 <div class="header text-center">
  <h2 class="title">Artículos listado por clasificación</h2>
 </div>
</div>
<!-- Header -->

<!-- Toolbar -->
<div class="row my-5 justify-content-end align-items-center px-4">
 <div class="col col-md-4 text-center">
  <h6>Crear Clasificación</h6>
  <a class="btn btn-secondary" href="{{route('clasification.create')}}"><i class="fa fa-plus"></i>&nbsp;Crear Clasificación</a>
 </div>
</div>
<!-- Toolbar -->

<!-- Tabla -->
<div class="content">
 <div class="row justify-content-start">
  @foreach ($clasifications as $c)
   <div class="col-10 col-md-4">
    <div class="card">
     <div class="card-header">
      <h4 class="card-title text-center">
       {{$c -> display_name}}<small>({{$c->concept->display_name}})</small>
      </h4>
     </div>
     <div class="card-body">
      <p>
       {{$c -> description}}
      </p>
      <p>
       Existen {{ $c->articles->count() }} artículos en esta clasificación
      </p>
     </div>
     <div class="card-footer d-flex justify-content-around">
      <a class="btn btn-secondary" href="{{route('clasification.show',$c->id)}}">Ver artículos</a>
      <a class="btn btn-info" href="{{route('clasification.edit',$c->id)}}">Editar</a>
      <a class="btn btn-danger" href="{{route('clasification.destroy',$c->id)}}">Eliminar</a>

     </div>
    </div>
   </div>
  @endforeach
 </div>
</div>
<!-- Tabla -->


 @include('backend.layouts.footers.footer')
@endsection
