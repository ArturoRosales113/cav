@extends('backend.layouts.app')
@section('content')
 <!-- Navbar -->
 @include('backend.layouts.navbars.nav_expand')
<!-- Header -->
<div class="panel-header panel-header-md">
 <div class="header text-center">
  <h2 class="title">Artículos @if (isset($category))
   <br><small>Categoría&nbsp;{{$category->name}}</small>
  </h2>
  <div class="row justify-content-center align-items-center">
   <div class="col-md-4 mb-4 m-md-0">
    <p class="category">
     <a class="text-white" href="{{ route('articulo.index') }}">
      <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de articulos</a>
    </p>
   </div>
  </div>
 @else
   </h2>
 @endif
 </div>
</div>
<!-- Header -->

<!-- Toolbar -->
<div class="row my-5 justify-content-end align-items-center px-4">
 <div class="col col-md-4">
  <a class="btn btn-secondary" href="{{route('article.create')}}"><i class="fa fa-plus"></i>&nbsp;Crear Articulo</a>
 </div>
 <div class="col-4">
  <h6 class="text-center text-lg-right">Buscar Artículo</h6>
<form class="form-horizontal mt-3" method="POST" enctype="multipart/form-data" action="{{ route('admin.articles.search') }}">
 {{ csrf_field() }}
 <div class="input-group no-border">
  <input type="text" value="" class="form-control text-body" name="title" placeholder="Introduce el SKU del artículo" autocomplete="off">
  <div class="input-group-append">
   <div class="input-group-text">
    <i class="fas fa-search"></i>
   </div>
  </div>
 </div>
</form>
 </div>
</div>
<!-- Toolbar -->

<!-- Tabla -->
<div class="content">
 <div class="row justify-content-start">
 <div class="col-12 col-lg-10">
<div class="card">
 <div class="card-body pt-3">
  <table class="table" id="articles_table">
   <thead>
    <tr class="text-center">
     <th scope="col"><small>Estilo</small></th>
     {{-- <th scope="col"><small>Precio</small></th> --}}
     {{-- <th scope="col"><small>Stock <br> [Color | Talla | Cantidad]</small></th> --}}
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
    @foreach($articles as $a)
      <tr class="text-center">


       <td>
        {{$a -> estilo}}
       </td>

       {{-- <td>
       ${{number_format($a -> precio,2)}}
       </td> --}}

       {{-- <td>
          @foreach ($a->stock as $as)
            <span>{{ $as->color }}&nbsp;|&nbsp;{{ $as -> talla }}&nbsp;|&nbsp;{{ $as -> cantidad }}</span>
            <br>
          @endforeach
       </td> --}}

{{--      <td>
        @if ($a->marca_id != null)
        {{ $a->marca->display_name }}
       @else
       <small>Sin Marca</small>
        @endif
       </td>

       <td>
        @if ($a->acabado_id != null)
        {{ $a->acabado->display_name }}
       @else
       <small>Sin Acabado</small>
        @endif
       </td>

       <td>
        @if ($a->linea_id != null)
        {{ $a->linea->display_name }}
       @else
       <small>Sin Línea</small>
        @endif
       </td>--}}

       <td>
        @if ($a->concept_id != null)
        {{ $a->concept->display_name }}
       @else
       <small>Sin Concepto</small>
        @endif
       </td>

       <td>
        @if ($a->clasification_id != null)
        {{ $a->clasification->display_name }}
       @else
       <small>Sin Clasificación</small>
        @endif
       </td>

       {{--<td>
       <small>{{ $a -> description }}</small>
      </td>--}}

       <td class="d-flex flex-row justify-content-center">

        <a class="btn btn-info btn-icon btn-sm btn-neutral" href="{{route('article.edit',$a -> id)}}">
         <i class="fa fa-edit"></i>
        </a>

        <a class="btn btn-default btn-icon btn-sm btn-neutral" href="{{ route('article.pictures', $a->id) }}">
         <i class="fas fa-camera-retro"></i>
        </a>

        <a class="btn btn-warning btn-icon btn-sm btn-neutral" href="{{route('article.show',$a -> id)}}">
         <i class="fas fa-eye"></i>
        </a>

        @if ($a->pics->count() > 0)
          <a class="btn btn-success btn-icon btn-sm btn-neutral" href="{{ route('front.vestido',$a->slug) }}">
            <i class="fas fa-globe-americas"></i>
          </a>
        @endif

        {{Form::open([ 'method'  => 'delete', 'route' => [ 'article.destroy',$a -> id ] ])}}
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

@section('page_scripts')
 <script type="text/javascript">
 $(document).ready( function () {
   $('#articles_table').DataTable();
} );
 </script>
@endsection
