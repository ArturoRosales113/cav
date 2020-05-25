@extends('backend.layouts.app')
@section('content')
<!-- Navbar -->
@include('backend.layouts.navbars.nav_expand')
<div class="panel-header panel-header-md">
 <div class="header text-center ">
  <h3 class="title"> Crear Nuevo Usuario </h3>
  <a class="text-white" href="{{ route('user.index') }}">
   <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de ususarios
  </a>
 </div>
</div>

<div class="content mt-5">
 <div class="row justify-content-center py-5">
  <div class="col-8">
   <div class="card">
    <div class="card-body">
     <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('user.store') }}">
      {{ csrf_field() }}
      <div class="form-group row justify-content-center py-5">
       <div class="col-12 col-md-8">
        <label for="exampleInputEmail1">Nombre</label>
        <input type="text" class="form-control" id="exampleInputEmail1" value="{{old('name')}}" name="name" aria-describedby="nameHelp" placeholder="Nombre">
        @if ($errors->has('name'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('name') }}</small>
         </span>
        @endif
       </div>
       <div class="col-12 col-md-8 py-2">
        <label for="exampleInputEmail1">Email:</label>
        <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{ old('email') }}" placeholder="ejemplo@ejemplo.com">
        @if ($errors->has('email'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('email') }}</small>
         </span>
        @endif
       </div>
       <div class="col-10 col-md-8 py-2">
        <label for="exampleInputEmail1">Selecciona un rol:</label>
        <select class="custom-select" name="role_id">
          <option value="0">Seleccionar...</option>
          @foreach ($roles as $r)
           <option value="{{ $r-> id }}" >{{ $r-> display_name }}</option>
          @endforeach
        </select>
        @if ($errors->has('role_id'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('role_id') }}</small>
         </span>
        @endif
       </div>
      </div>
      <div class="form-group row justify-content-center">
       <div class="col-md-8 text-center">
        <button type="submit" class="btn btn-secondary">
         Crear Usuario
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
