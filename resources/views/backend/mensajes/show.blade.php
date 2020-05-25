@extends('backend.layouts.app')
@section('content')
<!-- Navbar -->
@include('backend.layouts.navbars.nav_expand')
<!-- Header -->
<div class="panel-header panel-header-md">
 <div class="header text-center ">
  <h2 class="title">Mensaje #&nbsp;{{ $mensaje -> id }}</h2>
  <a class="text-white" href="{{ route('mensaje.index') }}">
   <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de mensajes</a>
 </div>
</div>
<!-- Header -->
<!-- contenido -->
<div class="content">
 <div class="row justify-content-center mt-5">
  <div class="col-md-10">
   <div class="card">
    <div class="card-header">
     <h4 class="title">
      <small>Recibimos un mensaje de:</small><br>
      {{$mensaje -> nombre}}
     </h4>
     <p><strong>Responder en:</strong><br>
      &nbsp;{{$mensaje -> correo}}&nbsp;&nbsp;<a href="mailto:{{$mensaje -> correo}}"><i class="fas fa-envelope"></i></a>
     </p>
     <p class="py-2">
      <strong>El mensaje dice:</strong> <br>
      {{$mensaje -> mensaje}}
     </p>
    </div>
   </div>
  </div>
 </div>
</div>
<!-- contenido -->
@include('backend.layouts.footers.footer')
@endsection
