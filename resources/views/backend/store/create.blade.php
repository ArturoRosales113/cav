@extends('backend.layouts.app')
@section('content')
<!-- Navbar -->
@include('backend.layouts.navbars.nav_expand')
<div class="panel-header panel-header-md">
 <div class="header text-center ">
  <h3 class="title"> Crear Nueva Sucursal </h3>
  <a class="text-white" href="{{ route('acabado.index') }}">
   <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de Sucursales
  </a>
 </div>
</div>

<div class="content mt-5">
 <div class="row justify-content-center py-5">
  <div class="col-10">
   <div class="card">
    <div class="card-body">
     <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('store.store') }}">
      {{ csrf_field() }}
      <div class="form-group row justify-content-center pt-5 pb-3">
       <div class="col-10">
        <label for="exampleInputEmail1">Nombre</label>
        <input type="text" class="form-control" id="exampleInputEmail1" value="{{old('name')}}" name="name" aria-describedby="nameHelp" placeholder="Nombre">
        @if ($errors->has('name'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('name') }}</small>
         </span>
        @endif
       </div>
      </div>
      <div class="form-group row justify-content-center py-3">
        <div class="col-10 col-md-5">
         <label for="exampleInputEmail1">Calle <small>(opcional)</small>:</label>
         <input type="text" class="form-control" id="calle" name="calle" aria-describedby="calleHelp" placeholder="">
         <small id="calleHelp" class="form-text text-muted">Ejemplo: <i>Araucarias #236</i></small>
        </div>
        <div class="col-10 col-md-5">
         <label for="exampleInputEmail1">Colonia <small>(opcional)</small>:</label>
         <input type="text" class="form-control" id="colonia" name="colonia" aria-describedby="coloniaHelp" placeholder="">
         <small id="colonianHelp" class="form-text text-muted">Ejemplo: <i>INDECO Ánimas</i></small>
        </div>
      </div>
      <div class="form-group row justify-content-center py-3">
        <div class="col-10 col-md-5">
         <label for="exampleInputEmail1">Estado <small>(opcional)</small>:</label>
         <input type="text" class="form-control" id="estado" name="estado" aria-describedby="estadoHelp" placeholder="">
         <small id="colonianHelp" class="form-text text-muted">Ejemplo: <i>Veracruz</i></small>
        </div>
        <div class="col-10 col-md-5">
         <label for="exampleInputEmail1">C.P <small>(opcional)</small>:</label>
         <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" aria-describedby="codigo_postalHelp" placeholder="">
         <small id="codigo_postalHelp" class="form-text text-muted">Ejemplo: <i>91000</i></small>
        </div>
      </div>
      <div class="form-group row justify-content-center py-3">
        <div class="col-10 col-md-3">
         <label for="exampleInputEmail1">Telefono <small>(opcional)</small>:</label>
         <input type="text" class="form-control" id="telefono" name="telefono" aria-describedby="telefonoHelp" placeholder="">
         <small id="descripcionHelp" class="form-text text-muted">Ejemplo: <i>(01)28-81-23-45-67</i></small>
        </div>
        <div class="col-10 col-md-3">
         <label for="exampleInputEmail1">Latitud <small>(opcional)</small>:</label>
         <input type="text" class="form-control" id="lat" name="lat" aria-describedby="latHelp" placeholder="">
         <small id="latHelp" class="form-text text-muted">Ejemplo: <i>-90.5843158</i></small>
        </div>
        <div class="col-10 col-md-3">
         <label for="exampleInputEmail1">Longitud <small>(opcional)</small>:</label>
         <input type="text" class="form-control" id="lng" name="lng" aria-describedby="lngHelp" placeholder="">
         <small id="descripcionHelp" class="form-text text-muted">Ejemplo: <i>19.589512</i></small>
        </div>
      </div>
      <div class="form-group row justify-content-center">
       <div class="col-md-8 text-center">
        <button type="submit" class="btn btn-secondary">
         Crear Sucursal
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
