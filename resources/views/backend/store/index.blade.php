@extends('backend.layouts.app')
@section('content')
 <!-- Navbar -->
 @include('backend.layouts.navbars.nav_expand')
<!-- Header -->
<div class="panel-header panel-header-md">
 <div class="header text-center">
  <h2 class="title">Artículos listado por Sucursal</h2>
 </div>
</div>
<!-- Header -->

<!-- Toolbar -->
<div class="row my-5 justify-content-end align-items-center px-4">
 <div class="col col-md-4 text-center">
  <h6>Crear Sucursal</h6>
  <a class="btn btn-secondary" href="{{route('store.create')}}"><i class="fa fa-plus"></i>&nbsp;Crear Sucursal</a>
 </div>
</div>
<!-- Toolbar -->

<!-- Tabla -->
<div class="content">
 <div class="row justify-content-start">
  @foreach ($stores as $s)
   <div class="col-10 col-md-4">
    <div class="card">
     <div class="card-header">
      <h4 class="card-title text-center">{{$s -> display_name}}</h4>
     </div>
     <div class="card-body">
      <p>
       Existen {{ $s->stocks->count() }} artículos con en esta sucursal
      </p>
     </div>
     <div class="card-footer d-flex justify-content-around">
      <a class="btn btn-secondary" href="{{route('store.show',$s->id)}}">Ver artículos</a>
      <a class="btn btn-info" href="{{route('store.edit',$s->id)}}">Editar</a>
      {{Form::open([ 'method'  => 'delete','class' => 'm-0', 'route' => [ 'store.destroy',$s -> id ] ])}}
       {{ Form::button('<i class="fas fa-trash"></i> Borrar', ['type'=>'submit','class' => 'btn btn-danger']) }}
      {{ Form::close() }}

     </div>
    </div>
   </div>
  @endforeach
 </div>
</div>
<!-- Tabla -->


 @include('backend.layouts.footers.footer')
@endsection
