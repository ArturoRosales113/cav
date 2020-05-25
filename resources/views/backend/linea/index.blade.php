@extends('backend.layouts.app')
@section('content')
 <!-- Navbar -->
 @include('backend.layouts.navbars.nav_expand')
<!-- Header -->
<div class="panel-header panel-header-md">
 <div class="header text-center">
  <h2 class="title">Artículos listado por Línea</h2>
 </div>
</div>
<!-- Header -->

<!-- Toolbar -->
<div class="row my-5 justify-content-end align-items-center px-4">
 <div class="col col-md-4 text-center">
  <h6>Crear Línea</h6>
  <a class="btn btn-secondary" href="{{route('linea.create')}}"><i class="fa fa-plus"></i>&nbsp;Crear Línea</a>
 </div>
</div>
<!-- Toolbar -->

<!-- Tabla -->
<div class="content">
 <div class="row justify-content-start">
  @foreach ($lineas as $l)
   <div class="col-10 col-md-4">
    <div class="card">
     <div class="card-header">
      <h4 class="card-title text-center">{{$l -> display_name}}</h4>
     </div>
     <div class="card-body">
      <p>
       {{$l -> description}}
      </p>
      <p>
       Existen {{ $l->articles->count() }} artículos con en este Línea
      </p>
     </div>
     <div class="card-footer d-flex justify-content-around">
      <a class="btn btn-secondary" href="{{route('linea.show',$l->id)}}">Ver artículos</a>
      <a class="btn btn-info" href="{{route('linea.edit',$l->id)}}">Editar</a>
      <a class="btn btn-danger" href="{{route('linea.destroy',$l->id)}}">Eliminar</a>
     </div>
    </div>
   </div>
  @endforeach
 </div>
</div>
<!-- Tabla -->


 @include('backend.layouts.footers.footer')
@endsection
