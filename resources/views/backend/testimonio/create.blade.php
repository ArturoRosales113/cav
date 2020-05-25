@extends('backend.layouts.app')
@section('content')
<!-- Navbar -->
@include('backend.layouts.navbars.nav_expand')
<div class="panel-header panel-header-md">
 <div class="header text-center ">
  <h3 class="title"> Crear Nueva Línea de Artículos </h3>
  <a class="text-white" href="{{ route('testimonio.index') }}">
   <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de Líneas
  </a>
 </div>
</div>

<div class="content mt-5">
 <div class="row justify-content-center py-5">
  <div class="col-10">
   <div class="card">
    <div class="card-body">
     <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('testimonio.store') }}">
      {{ csrf_field() }}
      <div class="form-group row justify-content-center py-5">
       <div class="col-10 col-md-5">
        <label for="exampleInputEmail1">Testimonio</label>
        <input type="text" class="form-control" value="{{old('testimonio')}}" name="testimonio" aria-describedby="testimonioHelp" placeholder="Testimonio">
        <small id="testimonioHelp" class="form-text text-muted">Ejemplo: <i>Excelente servicio</i></small>
        @if ($errors->has('testimonio'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('testimonio') }}</small>
         </span>
        @endif
       </div>
       <div class="col-10 col-md-5">
        <label for="exampleInputEmail1">Nombre:</label>
        <input type="text" class="form-control" name="nombre" aria-describedby="descripcionHelp" placeholder="Nombre" value="{{ old('nombre') }}">
        <small id="descripcionHelp" class="form-text text-muted">Ejemplo: <i>Julio Verne</i></small>
        @if ($errors->has('nombre'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('nombre') }}</small>
         </span>
        @endif
       </div>
      </div>
      <div class="form-group row justify-content-center">
       <div class="col-md-8 text-center">
        <button type="submit" class="btn btn-secondary">
         Crear Testimonio
        </button>
       </div>
      </div>
     </form>
    </div>
   </div>
  </div>
 </div>
</div>
@include('backend.layouts.footers.footer')
@endsection
