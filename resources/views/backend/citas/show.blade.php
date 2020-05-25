@extends('backend.layouts.app')
@section('content')
<!-- Navbar -->
@include('backend.layouts.navbars.nav_expand')
<?php
Carbon\Carbon::setLocale('es');
 ?>
<!-- Header -->
<div class="panel-header panel-header-md">
 <div class="header text-center ">
  <h2 class="title">Visita de&nbsp;{{ $cita->nombre }}</h2>
  <a class="text-white" href="{{ route('article.index') }}">
   <i class="fas fa-arrow-left"></i>&nbsp;Volver a la agenda</a>
 </div>
</div>
<!-- Header -->
<!-- contenido -->
<div class="content">
 <div class="row justify-content-center mt-5">
  <div class="col-md-6">
   <div class="card">
    <div class="card-header">
     <h4 class="title">
      <small>Recibirémos a:</small><br>
      {{$cita -> nombre}}
     </h4>
    </div>
    <div class="card-body">
     <p><strong>En la sucursal:</strong><br>
      {{$cita -> sucursal}}
     </p>
     <p class="py-2">
      <strong>El día:</strong> <br>
      {{Carbon\Carbon::createFromFormat('Y-m-d', $cita->fecha)->toFormattedDateString()}}
     </p>
    </div>
   </div>
  </div>
 </div>
</div>
<!-- contenido -->
@include('backend.layouts.footers.footer')
@endsection
