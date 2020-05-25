@extends('backend.layouts.app')
@section('content')
 <!-- Navbar -->
 @include('backend.layouts.navbars.nav_expand')
<!-- Header -->
<div class="panel-header panel-header-md">
 <div class="header text-center">
  <h2 class="title">Artículos listado por concepto</h2>
 </div>
</div>
<!-- Header -->

<!-- Toolbar -->
<div class="row my-5 justify-content-end align-items-center px-4">
 <div class="col col-md-4 text-center">
  <h6>Crear Concepto</h6>
  <a class="btn btn-secondary" href="{{route('concept.create')}}"><i class="fa fa-plus"></i>&nbsp;Crear Concepto</a>
 </div>
</div>
<!-- Toolbar -->

<!-- Tabla -->
<div class="content">
 <div class="row justify-content-start">
  @foreach ($concepts as $c)
   <div class="col-10 col-md-4">
    <div class="card">
     <div class="card-header">
      <h4 class="card-title text-center">{{$c -> display_name}}</h4>
     </div>
     <div class="card-body">
         @if($c->img_path != null)
            <img src="{{ asset($c->img_path) }}" alt="" class="card-img-top">
         @endif
      <p>
       {{$c -> description}}
      </p>
      <p>
       Existen {{ $c->articles->count() }} artículos en este concepto
      </p>
     </div>
     <div class="card-footer d-flex justify-content-around align-items-stretch">
      <a class="btn btn-secondary" href="{{route('concept.show',$c->id)}}">Ver artículos</a>
      <a class="btn btn-info" href="{{route('concept.edit',$c->id)}}">Editar</a>
      {{  Form::open([ 'method'  => 'delete', 'route' => [ 'concept.destroy', $c->id ], 'class' => 'm-0'])}}
      {{ Form::submit('Eliminar', ['class' => 'btn btn-danger']) }}
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
