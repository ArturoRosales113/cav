@extends('backend.layouts.app')
@section('content')
<!-- Navbar -->
@include('backend.layouts.navbars.nav_expand')
<!-- Header -->
<div class="panel-header panel-header-md">
 <div class="header text-center">
  <h2 class="title">Citas</h2>
 </div>
</div>
<!-- Header -->

<!-- Toolbar -->
<div class="row my-5 justify-content-between align-items-center">
 <div class="col-6 col-md-2 mb-4 m-md-0 text-center">

 </div>
</div>

<!-- Toolbar -->

<!-- Tabla -->
<div class="content">
 <div class="row justify-content-center">
  <div class="col-md-10">
   <div class="card card-plain">
    <div class="card-header">
     <h4 class="card-title">Citas para las sucursales</h4>
    </div>
    <div class="card-body">
     <div class="table-responsive">
      <table class="table">
       <thead class=" text-primary">
        <tr>
         <th>
          Nombre
         </th>
         <th class="text-right">
          Fecha de visita
         </th>
         <th class="text-center">
          Acciones
         </th>
        </tr>
       </thead>
       <tbody>
        @foreach ($citas as $c)
         <tr>
          <td>
           {{$c->nombre}}
          </td>
          <td class="text-right">
            {{$c->fecha}}
          </td>
          <td class="text-center">
            <a class="btn btn-link" href="{{route('cita.show',$c->id)}}"><i class="fa fa-search"></i>&nbsp;Ver Detalles</a>
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

</div>
<!-- Tabla -->


@include('backend.layouts.footers.footer')
@endsection
