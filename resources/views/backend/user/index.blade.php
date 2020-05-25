@extends('backend.layouts.app')
@section('content')
 <!-- Navbar -->
 @include('backend.layouts.navbars.nav_expand')
<!-- Header -->
<div class="panel-header panel-header-md">
 <div class="header text-center">
  <h2 class="title">Artículos listado por Acabados</h2>
 </div>
</div>
<!-- Header -->

<!-- Toolbar -->
<div class="row my-5 justify-content-end align-items-center px-4">
 <div class="col col-md-4 text-center">
  <h6>Crear Acabado</h6>
  <a class="btn btn-secondary" href="{{route('user.create')}}"><i class="fa fa-plus"></i>&nbsp;Crear Usuario</a>
 </div>
</div>
<!-- Toolbar -->

<!-- Tabla -->
<div class="content">
 <div class="row justify-content-center">
   <div class="col-10">
    <div class="card">
     <div class="card-header">
      <h4 class="card-title text-center">Usuarios RSVP</h4>
     </div>
     <div class="card-body">
       <table class="table">
         <thead>
           <tr>
             <th>Nombre</th>
             <th>Email</th>
             <th>Rol</th>
             <th>Acciones</th>
           </tr>
         </thead>
         <tbody>
           @foreach ($users as $u)
             <tr>
               <td>{{ $u->name }}</td>
               <td>{{ $u->email }}</td>
               <td>
                 @foreach ($u->roles as $ur)
                   {{ $ur->display_name }}
                 @endforeach
               </td>
               <td class="d-flex flex-row justify-content-center">
                 <a class="btn btn-info btn-icon btn-sm btn-neutral" href="{{route('user.edit',$u -> id)}}">
                  <i class="fa fa-edit"></i>
                 </a>

                 {{Form::open([ 'method'  => 'delete', 'route' => [ 'user.destroy',$u -> id ] ])}}
                  {{ Form::button('<i class="fas fa-times"></i>', ['type'=>'submit','class' => 'btn btn-danger btn-icon btn-sm btn-neutral']) }}
                 {{ Form::close() }}

               </td>
             </tr>
           @endforeach
         </tbody>
       </table>
     </div>

    </div>
   </div>
 </div>
</div>
<!-- Tabla -->


 @include('backend.layouts.footers.footer')
@endsection
