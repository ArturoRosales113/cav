@extends('backend.layouts.app')
@section('content')
<!-- Navbar -->
@include('backend.layouts.navbars.nav_expand')
<div class="panel-header panel-header-md">
 <div class="header text-center ">
  <h3 class="title"> Crear Nueva Clasificación </h3>
  <a class="text-white" href="{{ route('clasification.index') }}">
   <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de clasificaciones
  </a>
 </div>
</div>

<div class="content mt-5">
 <div class="row justify-content-center py-5">
  <div class="col-10">
   <div class="card py-5">
    <div class="card-body">
     <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('clasification.store') }}">
      {{ csrf_field() }}
      <div class="form-group row justify-content-center py-2">
       <div class="col-10 col-md-8">
        <label for="exampleInputEmail1">Nombre</label>
        <input type="text" class="form-control" id="exampleInputEmail1" value="{{old('name')}}" name="name" aria-describedby="nameHelp" placeholder="Nombre">
        <small id="nameHelp" class="form-text text-muted">Ejemplo: <i>Linea A, Recto, Corte Sirena</i></small>
        @if ($errors->has('name'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('name') }}</small>
         </span>
        @endif
       </div>
      </div>
      <div class="form-group row justify-content-center py-2">
       <div class="col-10 col-md-8">
        <label for="exampleInputEmail1">Descripción <small>(opcional)</small>:</label>
        <input type="text" class="form-control" id="descripcion" name="description" aria-describedby="descripcionHelp" placeholder="">
        <small id="descripcionHelp" class="form-text text-muted">Ejemplo: <i>Vestidos para la mejor ocasión de tu vida</i></small>
       </div>
      </div>
      <div class="form-group row justify-content-center py-2">
       <div class="col-10 col-md-8">
        <label for="exampleInputEmail1">Pertenece al concepto <small>(opcional)</small>:</label>
        <select class="custom-select" name="concept_id">
          <option value="0" selected>Seleccionar Concepto</option>
          @foreach ($concepts as $c)
           <option value="{{ $c -> id }}">{{ $c -> display_name }}</option>
          @endforeach
        </select>
        @if ($errors->has('concept_id'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('concept_id') }}</small>
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
