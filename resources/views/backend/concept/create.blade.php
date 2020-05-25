@extends('backend.layouts.app')
@section('content')
<!-- Navbar -->
@include('backend.layouts.navbars.nav_expand')
<div class="panel-header panel-header-md">
 <div class="header text-center ">
  <h3 class="title"> Crear Nuevo Concepto </h3>
  <a class="text-white" href="{{ route('concept.index') }}">
   <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de conceptos
  </a>
 </div>
</div>

<div class="content mt-5">
 <div class="row justify-content-center py-5">
  <div class="col-10">
   <div class="card">
    <div class="card-body">
     <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('concept.store') }}">
      {{ csrf_field() }}

      <div class="form-group row justify-content-center py-5">

       <div class="col-10 col-md-5">
        <label for="exampleInputEmail1">Nombre</label>
        <input type="text" class="form-control" id="exampleInputEmail1" value="{{old('name')}}" name="name" aria-describedby="nameHelp" placeholder="Nombre">
        <small id="nameHelp" class="form-text text-muted">Ejemplo: <i>Novias</i></small>
        @if ($errors->has('name'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('name') }}</small>
         </span>
        @endif
       </div>

       <div class="col-10 col-md-5">
        <label for="exampleInputEmail1">Descripción <small>(opcional)</small>:</label>
        <input type="text" class="form-control" id="descripcion" name="description" aria-describedby="descripcionHelp" placeholder="">
        <small id="descripcionHelp" class="form-text text-muted">Ejemplo: <i>Vestidos para la mejor ocasión de tu vida</i></small>
       </div>

      </div>

      <div class="form-group row justify-content-center">
       <div class="col-md-8 text-center">
        <div class="custom-file" id="customFile" lang="es">
            <input type="file" class="custom-file-input" name="file" id="propertyPhoto" aria-describedby="fileHelp">
            <label class="custom-file-label" for="propertyPhoto">
               Select file...
            </label>
        </div>
        @if ($errors->has('file'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('file') }}</small>
         </span>
        @endif
       </div>
      </div>

      <div class="form-group row justify-content-center">
       <div class="col-md-8 text-center">
        <button type="submit" class="btn btn-secondary">
         Guardar Concepto
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
