@extends('backend.layouts.app')
@section('content')
 <!-- Navbar -->
 @include('backend.layouts.navbars.nav_expand')
<!-- Header -->
<div class="panel-header panel-header-md">
 <div class="header text-center">
  <h2 class="title">Resultados para
   <br><small>{{$input}}</small>
  </h2>
  <div class="row justify-content-center align-items-center">
   <div class="col-md-4 mb-4 m-md-0">
    <p class="category">
  <a class="text-white" href="{{ route('article.index') }}">
   <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de articulos</a>
    </p>
   </div>
  </div>
 </div>
</div>
<!-- Header -->

<!-- Toolbar -->
<div class="row my-5 justify-content-end align-items-center px-4">
 <div class="col-4 ">
  <h6 class="text-center text-lg-right">Buscar artículo</h6>
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
  @foreach($resultados as $a)
     <div class="col-md-4">
        <div class="card article container {{ $a->estilo }}">
            <div class="card-header">
              <div class="row justify-content-between align-items-center d-flex py-3">
                <a class="" href="{{ route('article.show',$a->id) }}">&nbsp;<h6 class="">{{ $a -> estilo }}</h6></a>
              </div>
            </div>
            <div class="card-body">
             <div class="row justify-content-center">
              <div class="col-md-12">
                  <a class="" href="{{ route('article.show',$a->id) }}">&nbsp;<div class="article_image" style="background-image:url('@if ($a->pics->count() > 0){{ url($a->one_pic->pluck('path')->pop()) }} @else {{ asset('img/rsvp-default.jpg') }} @endif');">
                </div></a>
              </div>
             </div>
              {{--<p>{!! $a->content !!}</p>--}}
              <hr>
             <div class="row justify-content-center">
              <div class="col-md-10">
                <p><strong>Concepto:&nbsp;</strong>
                 @if ($a->concept_id != null)
                 <small>{{ $a->concept->display_name }}</small>
                @else
                 <small>No definida</small>
                @endif
                </p>
                <p><strong>Clasificacion:&nbsp;</strong>
                 @if ($a->clasification_id != null)
                 {{ $a->clasification->display_name }}
                @else
                  <small>No definida</small>
                 @endif
                </p>
                <p><strong>Código:&nbsp;</strong> <small>{{ $a-> codigo }}</small></p>
                <p><strong>Precio:&nbsp;</strong> <small>${{ number_format($a-> precio,2)  }}</small> </p>
             </div>

             </div>
             <hr>
            </div>
            <div class="card-footer">
             <div class="row justify-content-around align-items-center d-flex">
              <!-- ver en backend -->
              <a class="btn btn-link" href="{{ route('article.show',$a->id) }}"><i class="fa fa-search"></i>&nbsp;&nbsp;Detalle</a>
              <!-- Editar articulo -->
              <a class="btn btn-link" href="{{ route('article.edit', $a->id) }}"><i class="fas fa-edit"></i>&nbsp;&nbsp;Editar Articulo</a>
              <!-- Editar fotos -->
              <a class="btn btn-link" href="{{ route('article.pictures', $a->id) }}"><i class="fas fa-camera-retro"></i>&nbsp;&nbsp;Editar Fotos</a>
            </div>
             <hr>
             <div class="row">
              <div class="col-12 text-center">
               <!-- ver en sitio -->
               <a class="btn btn-link" href="{{ route('front.vestido',$a->id) }}"><i class="fas fa-globe"></i>&nbsp;&nbsp;Visualizar en sitio</a>
              </div>
             </div>
            </div>
        </div>
     </div>
   @endforeach
 </div>
 </div>
</div>
<!-- Tabla -->


 @include('backend.layouts.footers.footer')
@endsection
