@extends('backend.layouts.app')
@section('content')
<!-- Navbar -->
@include('backend.layouts.navbars.nav_expand')
<div class="panel-header panel-header-md">
 <div class="header text-center ">
  <h3 class="title"> Modificar Sucursal {{$store->display_name}} </h3>
  <a class="text-white" href="{{ route('acabado.index') }}">
   <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de sucursales
  </a>
 </div>
</div>

<div class="content mt-5">
 <div class="row justify-content-center py-5">
  <div class="col-10">
   <div class="card">
    <div class="card-body">
     {!! Form::model($store, ['route' => ['store.update', $store->id], 'method' => 'PUT']) !!}
      {!! Form::token() !!}
      <div class="form-group row justify-content-center py-5">
       <div class="col-10">
        {!! Form::label('display_name', 'Nombre') !!}
        {!! Form::text('display_name',old('display_name') ,array('class' => 'form-control')) !!}
        @if ($errors->has('display_name'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('display_name') }}</small>
         </span>
        @endif
       </div>
      </div>
      <div class="form-group row justify-content-center py-5">
       <div class="col-10 col-md-5">
        {!! Form::label('calle', 'Calle') !!}
        {!! Form::text('calle',old('cale') ,array('class' => 'form-control')) !!}
        @if ($errors->has('calle'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('calle') }}</small>
         </span>
        @endif
       </div>
       <div class="col-10 col-md-5">
        {!! Form::label('colonia', 'Colonia') !!}
        {!! Form::text('colonia',old('colonia') ,array('class' => 'form-control')) !!}
        @if ($errors->has('colonia'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('colonia') }}</small>
         </span>
        @endif
       </div>
      </div>
      <div class="form-group row justify-content-center py-5">
       <div class="col-10 col-md-5">
        {!! Form::label('estado', 'Estado') !!}
        {!! Form::text('estado',old('estado') ,array('class' => 'form-control')) !!}
        @if ($errors->has('estado'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('estado') }}</small>
         </span>
        @endif
       </div>
       <div class="col-10 col-md-5">
        {!! Form::label('codigo_postal', 'Codigo Postal') !!}
        {!! Form::text('codigo_postal',old('codigo_postal') ,array('class' => 'form-control')) !!}
        @if ($errors->has('codigo_postal'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('codigo_postal') }}</small>
         </span>
        @endif
       </div>
      </div>
      <div class="form-group row justify-content-center">
        <div class="col-10 col-md-3">
         {!! Form::label('telefono', 'Telefono') !!}
         {!! Form::text('telefono',old('telefono') ,array('class' => 'form-control')) !!}
         @if ($errors->has('telefono'))
         <span class="help-block">
              <small class="text-danger">{{ $errors->first('telefono') }}</small>
          </span>
         @endif
        </div>
        <div class="col-10 col-md-3">
         {!! Form::label('lat', 'Latitud') !!}
         {!! Form::text('lat',old('lat') ,array('class' => 'form-control')) !!}
         @if ($errors->has('lat'))
         <span class="help-block">
              <small class="text-danger">{{ $errors->first('lat') }}</small>
          </span>
         @endif
        </div>
        <div class="col-10 col-md-3">
         {!! Form::label('lng', 'Longitud') !!}
         {!! Form::text('lng',old('lng') ,array('class' => 'form-control')) !!}
         @if ($errors->has('lng'))
         <span class="help-block">
              <small class="text-danger">{{ $errors->first('lng') }}</small>
          </span>
         @endif
        </div>
      </div>
      <div class="form-group row justify-content-center">
       <div class="col-md-8 text-center">
        <button type="submit" class="btn btn-secondary">
         Guardar Sucursales
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
