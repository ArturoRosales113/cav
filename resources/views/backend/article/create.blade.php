@extends('backend.layouts.app')
@section('content')
<!-- Navbar -->
@include('backend.layouts.navbars.nav_expand')
<div class="panel-header panel-header-md">
 <div class="header text-center ">
  <h3 class="title"> Crear Artículo </h3>
  <a class="text-white" href="{{ route('article.index') }}">
   <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de articulos
  </a>
 </div>
</div>
<div class="content">
 {!! Form::open(['route' => ['article.store'], 'method' => 'POST']) !!}
  {!! Form::token() !!}
 <div class="row justify-content-center">
  <div class="col-12 col-md-6">
   <div class="card">
    <div class="card-body pt-5">

      <div class="form-group row justify-content-center align-items-center">

       <div class="col-md-10 py-3">
        {!! Form::label('titulo', 'Título') !!}
        {!! Form::text('titulo',old('titulo') ,array('class' => 'form-control')) !!}
        @if ($errors->has('titulo'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('titulo') }}</small>
         </span>
        @endif
       </div>


       <div class="col-md-5 py-3">
        {!! Form::label('estilo', 'Código del producto') !!}
        {!! Form::text('estilo',old('estilo') ,array('class' => 'form-control')) !!}
        @if ($errors->has('estilo'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('estilo') }}</small>
         </span>
        @endif
       </div>

       <div class="col-md-5 py-3">
        {!! Form::label('is_trend', 'Incluir en tendencias') !!}
        {!! Form::checkbox('is_trend', '1') !!}
        @if ($errors->has('is_trend'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('is_trend') }}</small>
         </span>
        @endif
       </div>

      </div>
      <div class="form-group row justify-content-center">

       <div class="col-10 col-lg-5 py-2">
        <label for="exampleInputEmail1">Pertenece al concepto:</label>
        <select class="custom-select" name="concept_id">
          <option value="0">Seleccionar Concepto</option>
          @foreach ($con as $c)
           <option value="{{ $c -> id }}" {{ old('concept_id') == $c->id ? 'selected' : '' }} >{{ $c -> display_name }}</option>
          @endforeach
        </select>
        @if ($errors->has('concept_id'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('concept_id') }}</small>
         </span>
        @endif
       </div>
       <div class="col-10 col-lg-5 py-2">
        <label for="exampleInputEmail1">Pertenece a la clasificación:</label>
        <select class="custom-select" name="clasification_id">
          <option value="0">Seleccionar Clasificación</option>
          @foreach ($clas as $c)
           <option value="{{ $c -> id }}" {{ old('clasification_id') == $c->id ? 'selected' : '' }} >{{ $c -> display_name }}</option>
          @endforeach
        </select>
        @if ($errors->has('clasification_id'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('clasification_id') }}</small>
         </span>
        @endif
       </div>
      </div>
      <div class="form-group row justify-content-center py-4">
       <div class="col-10 col-lg-10">
        {!! Form::label('description', 'Descripción') !!}
        {!! Form::textarea('description',old('description') ,array('class' => 'form-control')) !!}
        @if ($errors->has('description'))
        <span class="help-block">
          <small class="text-danger">{{ $errors->first('description') }}</small>
         </span>
        @endif
       </div>
      </div>
    </div>
   </div>
  </div>
 </div>
 <div class="form-group row justify-content-center">
  <div class="col-md-8 text-center">
   <button type="submit" class="btn btn-secondary">
    Guardar Artículo
   </button>
  </div>
 </div>
 {!! Form::close() !!}
</div>
@include('backend.layouts.footers.footer')
@endsection
