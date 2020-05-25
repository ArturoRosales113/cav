@extends('backend.layouts.app')
@section('content')
 <!-- Navbar -->
 @include('backend.layouts.navbars.nav_expand')
<!-- Header -->
<div class="panel-header panel-header-md">
 <div class="header text-center">
  <h2 class="title">Artículos listado por Sucursal</h2>
 </div>
</div>
<!-- Header -->

<!-- Toolbar -->
<div class="row my-5 justify-content-center align-items-center px-4">
 <div class="col col-md-8 text-center">
  <h2>Sucursal "{{$store->display_name}}"</h2>
  <h5>Hay {{$store->stocks()->count()}} artículos en esta sucursal</h5>
 </div>
</div>
<!-- Toolbar -->

<!-- Tabla -->
<div class="content">
 <div class="row justify-content-start">
  <div class="col-12">
   <div class="card">
    <div class="card-body">
     <div class="row pt-3">
      <div class="col-12">
       <table class="table">
        <thead>
         <tr class="text-center">
          <th scope="col"><small>Estilo</small></th>
          <th scope="col"><small>Precio</small></th>
          {{--<th scope="col"><small>Marca</small></th>
          <th scope="col"><small>Acabado</small></th>
          <th scope="col"><small>Linea</small></th>--}}
          <th scope="col"><small>Concepto</small></th>
          <th scope="col"><small>Clasificación</small></th>
          {{--<th scope="col"><small>Descricpción</small></th>--}}
          <th scope="col"><small>Acciones</small></th>
         </tr>
        </thead>
        <tbody>
         @foreach($store->stocks as $s)
           <tr class="text-center">
            <td>
             {{$s->article -> estilo}}
            </td>

            <td>
             ${{number_format($s->article -> precio,2)}}
            </td>



     {{--      <td>
             @if ($s->marca_id != null)
             {{ $s->marca->display_name }}
            @else
            <small>Sin Marca</small>
             @endif
            </td>

            <td>
             @if ($s->acabado_id != null)
             {{ $s->acabado->display_name }}
            @else
            <small>Sin Acabado</small>
             @endif
            </td>

            <td>
             @if ($s->linea_id != null)
             {{ $s->linea->display_name }}
            @else
            <small>Sin Línea</small>
             @endif
            </td>--}}

            <td>
             @if ($s->article->concept_id != null)
             {{ $s->article->concept->display_name }}
            @else
            <small>Sin Concepto</small>
             @endif
            </td>

            <td>
             @if ($s->article->clasification_id != null)
             {{ $s->article->clasification->display_name }}
            @else
            <small>Sin Clasificación</small>
             @endif
            </td>

            {{--<td>
            <small>{{ $s -> description }}</small>
           </td>--}}

            <td class="d-flex flex-row justify-content-center">

             <a class="btn btn-info btn-icon btn-sm btn-neutral" href="{{route('article.edit',$s->article -> id)}}">
              <i class="fa fa-edit"></i>
             </a>

             <a class="btn btn-default btn-icon btn-sm btn-neutral" href="{{ route('article.pictures', $s->article->id) }}">
              <i class="fas fa-camera-retro"></i>
             </a>

             <a class="btn btn-warning btn-icon btn-sm btn-neutral" href="{{route('article.show',$s->article -> id)}}">
              <i class="fas fa-eye"></i>
             </a>

           @if ($s->article->pics->count() > 1)
            <a class="btn btn-success btn-icon btn-sm btn-neutral" href="{{ route('front.vestido',$s->article->id) }}">
             <i class="fas fa-globe-americas"></i>
            </a>
           @endif

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
</div>
<!-- Tabla -->


 @include('backend.layouts.footers.footer')
@endsection
