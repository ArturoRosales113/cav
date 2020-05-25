@extends('backend.layouts.app')
@section('content')
<!-- Navbar -->
@include('backend.layouts.navbars.nav_expand')
<div class="panel-header panel-header-md">
 <div class="header text-center ">
  <h3 class="title"> Crear Nuevo Banner </h3>
  <a class="text-white" href="{{ route('banner.index') }}">
   <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de Banners
  </a>
 </div>
</div>

<div class="content mt-5">
 <div class="row justify-content-center py-5">
  <div class="col-10">
   <div class="card">
    <div class="card-body">
     <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('banner.store') }}">
      {{ csrf_field() }}
      <div class="row justify-content-center py-5">

        <div class="form-group col-10 col-lg-8">
          <input type="text" class="form-control" name="url" placeholder="Introduce una url (opcional)">
          @if ($errors->has('url'))
          <span class="help-block">
               <small class="text-danger">{{ $errors->first('url') }}</small>
           </span>
          @endif
        </div>

       <div class="form-group col-10 col-md-5 py-3">
         <div class="custom-file">
           <input type="file" class="custom-file-input" name="pic" id="img">
           <label class="custom-file-label" for="img">Elegir Imagen</label>
         </div>
         @if ($errors->has('pic'))
         <span class="help-block">
              <small class="text-danger">{{ $errors->first('pic') }}</small>
          </span>
         @endif
       </div>

      </div>
      <div class="form-group row justify-content-center">
       <div class="col-md-8 text-center">
        <button type="submit" class="btn btn-secondary">
         Crear Banner
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
