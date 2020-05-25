@extends('backend.layouts.app')
@section('page_title') Imagenes
@endsection
@section('page_styles') {!! Html::style('css/dropzone.css') !!}
@endsection
@section('content')
<!-- Navbar -->
@include('backend.layouts.navbars.nav_expand')
<!-- Header -->
<div class="panel-header panel-header-md">
 <div class="header text-center ">
  <h2 class="title">Fotos para {{$article -> estilo}}</h2>
  <a class="text-white" href="{{ route('article.show',$article -> id) }}">
        <i class="fas fa-arrow-left"></i>&nbsp;Volver a artículo</a>
 </div>
</div>

<!-- Header -->
<!-- Content -->
<div class="content">

 <div class="row justify-content-center align-items-center">
  <!-- Formulario para subir -->
  <div class="col-md-6">
   <div class="row">
    <div class="col-sm-10 mt-5">
     <h2 class="page-heading">Imágenes <span id="counter"></span></h2>
     <form method="post" action="{{ route('pic.store') }}" enctype="multipart/form-data" class="dropzone" id="myDropzone">
      {{ csrf_field() }}
      <input type="text" class="d-none" name="id" value="{{$article->id}}">
      <div class="dz-message">
       <div class="col-xs-8">
        <div class="message">
         <p>Arrastra aquí los archivos <br> o click para seleccionar
         </p>
        </div>
       </div>
      </div>
      <div class="fallback">
       <input type="file" name="imagen" multiple>
      </div>
     </form>
    </div>
   </div>
 </div>


 <!-- Muestra de fotos -->
 @if ($article->pics()->count() > 0)
 <div class="col-md-10 mt-5">
  <div class="row">
   @foreach ($article->pics as $ap)
   <div class="col-md-3">
    <div style="background-image:url('{{url($ap->path)}}');background-size:cover;background-position:center;min-height:350px;">
    </div>
    <!-- borrar -->
    <form action="{{route('pic.destroy', $ap->id)}}" method="POST" class="m-0">
     {{ csrf_field() }}
     <input type="hidden" name="_method" value="DELETE" />
     <button class="btn btn-danger" type="submit"><i class="fa fa-trash" /></i></button>
    </form>
   </div>

   @endforeach
  </div>
 </div>
 @endif
</div>


</div>
<!-- Content -->
@include('backend.layouts.footers.footer')
@endsection
@section('page_scripts')
<!-- Dropzone -->
{!! Html::script('js/dropzone.js') !!}
{!! Html::script('js/dropzone-config.js') !!}

@endsection
