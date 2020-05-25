@extends('backend.layouts.app')
@section('content')
 <!-- Navbar -->
 @include('backend.layouts.navbars.nav_expand')
<!-- Header -->
<div class="panel-header panel-header-md">
 <div class="header text-center">
  <h2 class="title">Listado de Banners</h2>
 </div>
</div>
<!-- Header -->

<!-- Toolbar -->
<div class="row my-5 justify-content-end align-items-center px-4">
 <div class="col col-md-4 text-center">
  <h6>Crear Banner</h6>
  <a class="btn btn-secondary" href="{{route('banner.create')}}"><i class="fa fa-plus"></i>&nbsp;Crear Banner</a>
 </div>
</div>
<!-- Toolbar -->

<!-- Tabla -->
<div class="content">
 <div class="row justify-content-start">
  @foreach ($banners as $b)
   <div class="col-10 col-md-6">
    <div class="card">
      <img src="{{ asset($b->img_path) }}" class="card-img-top" alt="">
     <div class="card-body text-center py-2">
       @if($b->url != null)
        <a href="{{ $b->url }}" class="btn btn-link" target="_blank">Link</a>
       @endif
     </div>
     <div class="card-footer d-flex justify-content-around">
    {{  Form::open([ 'method'  => 'delete', 'route' => [ 'banner.destroy', $b->id ] ])}}
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
