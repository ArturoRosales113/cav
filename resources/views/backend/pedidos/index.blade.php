@extends('backend.layouts.app')
@section('content')
 <!-- Navbar -->
 @include('backend.layouts.navbars.nav_expand')
<!-- Header -->
<div class="panel-header panel-header-md">
 <div class="header text-center">
  <h2 class="title">Pedidos</h2>
 </div>
</div>
<!-- Header -->
<div class="content">
 <!-- Toolbar -->
 <div class="row my-5 justify-content-between align-items-center">
  <div class="col-6 col-md-2 mb-4 m-md-0 text-center">

  </div>
 </div>
 <!-- Toolbar -->
 <div class="row justify-content-center">
     <div class="col-md-12">
       <div class="card card-plain card-subcategories">
           <div class="card-body ">
             <ul class="nav nav-pills nav-pills-secondary nav-pills-icons justify-content-start" role="tablist">
                 <li class="nav-item">
                     <a class="nav-link active" data-toggle="tab" href="#pedidos" role="tablist">
                         <i class="fas fa-luggage-cart"></i>
                         Pedidos
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#reportes" role="tablist">
                         <i class="fas fa-chart-pie"></i>
                         Reportes
                     </a>
                 </li>
             </ul>
             <div class="tab-content tab-space tab-subcategories">
                 <div class="tab-pane active" id="pedidos">
                  <!-- Tabla -->
                  <div class="row justify-content-center">
                   <div class="col-md-12">
                    <div class="card card-plain">
                     <div class="card-header">
                      <h4 class="card-title">Pedidos</h4>
                     </div>
                     <div class="card-body">
                      <div class="table-responsive">
                       <table class="table" id="pedidos_table">
                        <thead class=" text-primary">
                         <tr class="text-center">
                          <th>
                           ID
                          </th>
                          <th>
                           Nombre
                          </th>
                          <th>
                           Total
                          </th>
                          <th>
                           Metodo
                          </th>
                          <th>
                           Estado
                          </th>
                          <th>
                           Acciones
                          </th>
                         </tr>
                        </thead>
                        <tbody>
                         @foreach ($pedidos as $p)
                          <tr class="text-center">
                           <td class="py-3">
                            {{$p -> openpay_id_pedido}}
                           </td>
                           <td class="py-3">
                            {{$p -> nombre}}
                           </td>
                           <td class="py-3">
                            ${{number_format($p -> total , 2)}}
                           </td>
                           <td class="py-3">
                            {{$p -> metodo}}
                           </td>
                           <td class="py-3">
                            {{$p->pedido_status->display_name}}
                           </td>
                           <td class="py-3">
                            <a href="{{ route('pedido.show',$p -> id) }}" class="btn">Ver Detalles</a>
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
                 </div>
                 <div class="tab-pane h-75" id="reportes">
                   {!! $chartSemana->container() !!}
                 </div>
             </div>
           </div>

       </div>
     </div>
 </div>
</div>
 @include('backend.layouts.footers.footer')
@endsection
@section('page_scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
 <script type="text/javascript">
 $(document).ready( function () {
   $('#pedidos_table').DataTable();
} );
 </script>
 {!! $chartSemana->script() !!}
@endsection
