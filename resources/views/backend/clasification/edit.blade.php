@extends('backend.layouts.app')
@section('content')
<!-- Navbar -->
@include('backend.layouts.navbars.nav_expand')
<div class="panel-header panel-header-md">
 <div class="header text-center ">
  <h3 class="title"> Editar Acabado {{$clasification->display_name}}</h3>
  <a class="text-white" href="{{ route('clasification.index') }}">
   <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de clasificaciones
  </a>
 </div>
</div>

<div class="content mt-5">
 <div class="row justify-content-center py-5">
  <div class="col-10">
   <div class="card">
    <div class="card-body">
     {!! Form::model($clasification, ['route' => ['clasification.update', $clasification->id], 'method' => 'PUT']) !!}
      {!! Form::token() !!}
      <div class="form-group row justify-content-center py-5">
       <div class="col-10 col-md-8">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('display_name',old('display_name') ,array('class' => 'form-control')) !!}
        <small id="nameHelp" class="form-text text-muted">Ejemplo: <i>Lino, Seda</i></small>
        @if ($errors->has('name'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('name') }}</small>
         </span>
        @endif
       </div>
      </div>
      <div class="form-group row justify-content-center">
       <div class="col-10 col-md-8">
        {!! Form::label('description',' Descripción(opcional)') !!}
        {!! Form::text('description', old('description'),array('class' => 'form-control')) !!}
        <small id="descripcionHelp" class="form-text text-muted">Ejemplo: <i>Vestidos para la mejor ocasión de tu vida</i></small>
       </div>
      </div>
      <div class="form-group row justify-content-center">
       <div class="col-10 col-md-8">
        <label for="exampleInputEmail1">Pertenece al concepto <small>(opcional)</small>:</label>
        <select class="custom-select" name="concept_id">
          <option value="0" selected>Seleccionar Concepto</option>
          @foreach ($concepts as $c)
           <option value="{{ $c -> id }}" {{ $clasification->con_id === $c->id ? 'selected' : '' }}>{{ $c -> display_name }}</option>
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
         Guardar Cambios
        </button>
       </div>
      </div>
     {!! Form::close() !!}
    </div>
   </div>
  </div>
 </div>


</div>
@include('backend.layouts.footers.footer')
@endsection
