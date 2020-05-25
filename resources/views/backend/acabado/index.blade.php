@extends('backend.layouts.app')
@section('content')
 <!-- Navbar -->
 @include('backend.layouts.navbars.nav_expand')
<!-- Header -->
<div class="panel-header panel-header-md">
 <div class="header text-center">
  <h2 class="title">Artículos listado por Acabados</h2>
 </div>
</div>
<!-- Header -->

<!-- Toolbar -->
<div class="row my-5 justify-content-end align-items-center px-4">
 <div class="col col-md-4 text-center">
  <h6>Crear Acabado</h6>
  <a class="btn btn-secondary" href="{{route('acabado.create')}}"><i class="fa fa-plus"></i>&nbsp;Crear Acabado</a>
 </div>
</div>
<!-- Toolbar -->

<!-- Tabla -->
<div class="content">
 <div class="row justify-content-start">
  @foreach ($acabados as $a)
   <div class="col-10 col-md-4">
    <div class="card">
     <div class="card-header">
      <h4 class="card-title text-center">{{$a -> display_name}}</h4>
     </div>
     <div class="card-body">
      <p>
       {{$a -> description}}
      </p>
      <p>
       Existen {{ $a->articles->count() }} artículos con en este acabado
      </p>
     </div>
     <div class="card-footer d-flex justify-content-around">
      <a class="btn btn-secondary" href="{{route('acabado.show',$a->id)}}">Ver artículos</a>
      <a class="btn btn-info" href="{{route('acabado.edit',$a->id)}}">Editar</a>
      <a class="btn btn-danger" href="{{route('acabado.destroy',$a->id)}}">Eliminar</a>

     </div>
    </div>
   </div>
  @endforeach
 </div>
</div>
<!-- Tabla -->


 @include('backend.layouts.footers.footer')
@endsection
