@extends('backend.layouts.app')

@section('page_styles')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
@endsection

@section('content')
 <!-- Navbar -->
 @include('backend.layouts.navbars.nav_expand')
<!-- Header -->
<div class="panel-header panel-header-md">
 <div class="header text-center">
  <h2 class="title">
    Listado de artículos destacados
    <br>
    <small>Tendencias</small>
  </h2>
 </div>
</div>
<!-- Header -->

<!-- Toolbar -->
<div class="row my-5 justify-content-end align-items-center px-4">
  <div class="col-lg-4">
    <form action="{{ route('article.tendencias.add') }}" method="POST">
      {{ csrf_field() }}
      <div class="form-group">
        <label for=""> Agregar Productos</label>
        <select class="selectpicker form-control" name="id" data-live-search="true">
          <option value="null" selected>{{ $a -> titulo }}</option>
          @foreach ($articles as $a)
          <option value="{{ $a -> id }}" data-tokens="{{ $a -> slug }}">{{ $a -> titulo }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-secondary">Agregar</button>
      </div>
      
    </form>
  </div>
</div>
<!-- Toolbar -->

<!-- Tabla -->
<div class="content">
 <div class="row justify-content-start">
  @foreach ($trends as $t)
  <div class="col-6 col-lg-3">
    <div class="card">
      <img src="{{ asset($t->pics()->first()->path )}}" class="card-img-top" alt="...">
      <div class="card-body py-3 text-center">
        <h5 class="card-title">{{ $t->titulo }}</h5>
        <p class="card-text">{{ $t->description }}</p>
        <a href="#" class="btn btn-primary">Remover de destacados</a>
      </div>
    </div> 
  </div>
  @endforeach
 </div>
</div>
<!-- Tabla -->


 @include('backend.layouts.footers.footer')
@endsection


@section('page_scripts')
    <!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script>
@endsection