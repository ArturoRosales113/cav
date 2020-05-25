@extends('backend.layouts.app')
@section('content')
<!-- Navbar -->
@include('backend.layouts.navbars.nav_expand')
<div class="panel-header panel-header-md">
 <div class="header text-center ">
  <h3 class="title">
       Editar Artículo <br>
      </h3>
  <a class="text-white" href="{{ route('article.show',$article->id) }}">
   <i class="fas fa-arrow-left"></i>&nbsp;Volver a vista de articulo
  </a>
 </div>
</div>

<div class="content">
 {!! Form::model($article, ['route' => ['article.update', $article->id], 'method' => 'PUT']) !!}
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
        {!! Form::label('estilo', 'Estilo') !!}
        {!! Form::text('estilo',old('estilo') ,array('class' => 'form-control')) !!}
        @if ($errors->has('estilo'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('estilo') }}</small>
         </span>
        @endif
       </div>

       {{-- <div class="col-md-5 py-3">
        {!! Form::label('suela', 'Suela (opcional)') !!}
        {!! Form::text('suela',old('suela') ,array('class' => 'form-control')) !!}
        @if ($errors->has('suela'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('suela') }}</small>
         </span>
        @endif
       </div>

       <div class="col-md-5 py-3">
        {!! Form::label('precio', 'Precio') !!}
        {!! Form::text('precio',old('suela') ,array('class' => 'form-control')) !!}
        @if ($errors->has('precio'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('precio') }}</small>
         </span>
        @endif
       </div>
        <div class="w-100"></div>

       <div class="col-md-5 py-3">
        {!! Form::label('is_rebaja', 'Está en rebaja') !!}
        {!! Form::checkbox('is_rebaja', '1', $article->is_rebaja) !!}
        @if ($errors->has('precio_descuento'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('precio_descuento') }}</small>
         </span>
        @endif
       </div>

       <div class="col-md-5 py-3">
         {!! Form::label('precio_descuento', 'Precio Descuento') !!}
         {!! Form::text('precio_descuento',old('precio_descuento') ,array('class' => 'form-control')) !!}
        {{-- <label for="precio_descuento" class="text-left control-label">Precio de Rebaja</label>
        <input id="precio_descuento" type="text" class="form-control" name="precio_descuento" value="{{ old('precio_descuento') }}"> 
        @if ($errors->has('precio_descuento'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('precio_descuento') }}</small>
         </span>
        @endif
       </div> --}}
       <div class="col-md-5 py-3">
        {!! Form::label('is_trend', 'Incluir en tendencias',$article->is_trend) !!}
        {!! Form::checkbox('is_trend', '1', $article->is_trend) !!}
        @if ($errors->has('is_trend'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('is_trend') }}</small>
         </span>
        @endif
       </div>
      </div>
      <div class="form-group row justify-content-center">

       {{-- <div class="col-10 col-md-5 py-2">
        <label for="exampleInputEmail1">Pertenece a la Línea:</label>
        <select class="custom-select" name="linea_id">
          <option value="0">Seleccionar Línea</option>
          @foreach ($linea as $l)
           <option value="{{ $l-> id }}" {{ $article->linea_id == $l->id ? 'selected' : '' }}>{{ $l-> display_name }}</option>
          @endforeach
        </select>
        @if ($errors->has('concept_id'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('concept_id') }}</small>
         </span>
        @endif
       </div>

       <div class="col-10 col-md-5 py-2">
        <label for="exampleInputEmail1">Pertenece a la acabado:</label>
        <select class="custom-select" name="acabado_id">
          <option value="0">Seleccionar Acabado</option>
          @foreach ($acabado as $a)
           <option value="{{ $a-> id }}" {{ $article->acabado_id == $a->id ? 'selected' : '' }}>{{ $a-> display_name }}</option>
          @endforeach
        </select>
        @if ($errors->has('concept_id'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('concept_id') }}</small>
         </span>
        @endif
       </div>

       <div class="col-10 col-md-5 py-2">
        <label for="exampleInputEmail1">Pertenece a la marca:</label>
        <select class="custom-select" name="marca_id">
          <option value="0">Seleccionar Marca</option>
          @foreach ($marca as $m)
           <option value="{{ $m-> id }}" {{ $article->marca_id == $m->id ? 'selected' : '' }}>{{ $m-> display_name }}</option>
          @endforeach
        </select>
        @if ($errors->has('concept_id'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('concept_id') }}</small>
         </span>
        @endif
       </div> --}}

       <div class="col-10 col-md-5 py-2">
        <label for="exampleInputEmail1">Pertenece al concepto:</label>
        <select class="custom-select" name="concept_id">
          <option value="0">Seleccionar Concepto</option>
          @foreach ($con as $c)
           <option value="{{ $c -> id }}" {{ $article->concept_id == $c->id ? 'selected' : '' }}>{{ $c -> display_name }}</option>
          @endforeach
        </select>
        @if ($errors->has('concept_id'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('concept_id') }}</small>
         </span>
        @endif
       </div>
       <div class="col-10 col-md-5 py-2">
        <label for="exampleInputEmail1">Pertenece a la clasificación:</label>
        <select class="custom-select" name="clasification_id">
          <option value="0">Seleccionar Concepto</option>
          @foreach ($clas as $c)
           <option value="{{ $c -> id }}" {{ $article->clasification_id == $c->id ? 'selected' : '' }}>{{ $c -> display_name }}</option>
          @endforeach
        </select>
        @if ($errors->has('concept_id'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('concept_id') }}</small>
         </span>
        @endif
       </div>
      </div>
      <div class="form-group row justify-content-center py-4">
       <div class="col-md-10">
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
  <div class="col-md-10 text-center">
   <button type="submit" class="btn btn-secondary">
    Guardar Artículo
   </button>
  </div>
 </div>
 {!! Form::close() !!}
</div>
@include('backend.layouts.footers.footer')
@endsection
