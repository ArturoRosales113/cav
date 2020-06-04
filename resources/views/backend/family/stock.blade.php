@extends('backend.layouts.app')
@section('content')
<!-- Navbar -->
@include('backend.layouts.navbars.nav_expand')
<!-- Header -->
<div class="panel-header panel-header-md">
 <div class="header text-center ">
  <h2 class="title">{{ $art -> estilo }}</h2>
  <a class="text-white" href="{{ route('article.index') }}">
   <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de articulos</a>
 </div>
</div>
<!-- Header -->
<!-- contenido -->
<div class="content">
 <div class="row justify-content-center mt-5">
  <div class="col-md-10">
   <div class="card">
    <div class="card-body p-4">
     <div class="row align-items-start">
      <div class="col-md-4 text-center">
       <div class="article_image" style="background-image:url('');">
       </div>
       <a href="{{ route('article.pictures', $art->estilo) }}" class="btn btn-link">
        <i class="fas fa-camera-retro"></i>&nbsp;Editar imágenes</a>
      </div>
      <div class="col-md-6">
       <h2>{{$art->title}}</h2>
       {!!$art->content!!}
       <p>Concepto:</p>
       <small>{{ $art->articleConcepto->display }}</small>
       <hr>
       <p>Precio:</p>
       <small>${{ number_format($art-> Precio,2) }}</small>
       <hr>
       <p>Clasificacion:</p>
       <small>{{ $art-> Clasificacion }}</small>
       <hr>
       <p>Descripción</p>
       <small>{{$art -> descripcion }}</small>
       <hr>
       <p>Color</p>
       <small>{{$art -> Color_Base }}</small>
       <hr>
       <p>Código</p>
       <small>{{$art -> Codigo }}</small>
      </div>
     </div>
    </div>
    <div class="card-footer">
     <div class="row justify-content-end align-items-center d-flex">
      <a class="btn btn-link mr-2" href="{{ route('front.vestido', $art-> Estilo) }}"><i class="fas fa-globe"></i>&nbsp;Ver en sitio</a>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
<!-- contenido -->
@include('backend.layouts.footers.footer')
@endsection
