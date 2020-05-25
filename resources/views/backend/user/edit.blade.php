@extends('backend.layouts.app')
@section('content')
<!-- Navbar -->
@include('backend.layouts.navbars.nav_expand')
<div class="panel-header panel-header-md">
 <div class="header text-center ">
  <h3 class="title"> Modificar el Usuario {{$user->email}} </h3>
  <a class="text-white" href="{{ route('user.index') }}">
   <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de Usuarios
  </a>
 </div>
</div>

<div class="content mt-5">
 <div class="row justify-content-center py-5">
  <div class="col-10">
   <div class="card">
    <div class="card-body">
     {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'PUT']) !!}
      {!! Form::token() !!}
      {!!Form::hidden('user_id', $user->id )!!}
      <div class="form-group row justify-content-center py-5">
       <div class="col-10">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name',old('name') ,array('class' => 'form-control')) !!}
        @if ($errors->has('name'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('name') }}</small>
         </span>
        @endif
       </div>
       <div class="col-10 py-2">
        {!! Form::label('email', 'Email') !!}
        {!! Form::text('email',old('email') ,array('class' => 'form-control')) !!}
        @if ($errors->has('email'))
        <span class="help-block">
             <small class="text-danger">{{ $errors->first('email') }}</small>
         </span>
        @endif
       </div>
       <div class="col-10 py-2">
        <label for="exampleInputEmail1">Selecciona un rol:</label>
        <select class="custom-select" name="role_id">
          <option value="0">Seleccionar...</option>
          @foreach ($roles as $r)
           <option value="{{ $r-> id }}" @if($user->roles->contains('id',$r->id)) selected @endif>{{ $r-> display_name }}</option>
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
         Guardar Acabado
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
