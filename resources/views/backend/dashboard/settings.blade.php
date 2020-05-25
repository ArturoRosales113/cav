@extends('backend.layouts.app')

@section('content')

@include('backend.layouts.navbars.nav_expand')
<!-- Header -->
<div class="panel-header panel-header-md">
    <div class="header text-center" >
    <h2 class="title">
      Preferencias <br>
      <small>Dejar vacío si la variable no se requiere</small>
    </h2>
   </div>
  </div>
  <!-- Header -->
<div class="row justify-content-center py-5">
 <div class="col-md-11">
     <div class="row justify-content-center">
         <div class="col-md-10">
             <form action="{{ route('app.settings') }}" method="POST" class="form">
                {{ csrf_field() }}
                <div class="row justify-content-around">

                    <div class="col">
                        <h3>
                            Redes Sociales
                        </h3>

                        @foreach ($settings->rss as $s=>$r)
                        <div class="form-group">
                            <label for="">
                                <i class="{{ $r->icon }}"></i> &nbsp;
                                {{ ucfirst($s) }}
                            </label>
                            <input class="form-control" name="{{ $s }}" type="text" value="{{ $r->url }}">
                        </div>
                        @endforeach
                    </div>

                    <div class="col">
                        <h3>Dirección</h3>
                        @foreach ($settings->direccion as $d=>$dd)
                        <div class="form-group">
                            <label for="">{{ ucfirst($d) }}</label>
                            <input class="form-control" name="{{ $d }}" type="text" value="{{ $dd }}">
                        </div>
                        @endforeach
                    </div>
                </div>
                <hr>
                <div class="row justify-content-center py-5">
                    <div class="col-11">
                        <h3>Tracking</h3>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="">Palabras clave (separar por coma )</label>
                            <textarea class="form-control" name="keywords" value="{{ $settings->keywords }}" cols="50" rows="50">{{ $settings->keywords }}</textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group py-4">
                            <label for="">Google</label>
                            <textarea class="form-control" name="google" value="{{ $settings->google }}" cols="30" rows="10">{{ $settings->google }}</textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group py-4">
                            <label for="">Pixel</label>
                            <textarea class="form-control" name="pixel" value="{{ $settings->pixel }}" cols="30" rows="10">{{ $settings->pixel }}</textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row justify-content-center">
                    <div class="col-11">
                        <h3>Mensaje Cita Creada</h3>
                        <div class="form-group">
                            <label for="">Titulo</label>
                            <input type="text" class="form-control" name="citaTitulo" value="{{ $settings->confirmacionCita->titulo }}">
                        </div>
                        <div class="form-group">
                            <label for="">Texto</label>
                            <textarea name="citaTexto" value="{{ $settings->confirmacionCita->texto }}" class="form-control" cols="30" rows="10">{{ $settings->confirmacionCita->texto }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">link</label>
                            <input type="text" class="form-control" name="citaLink" value="{{ $settings->confirmacionCita->link }}">
                        </div>
                        <div class="form-group">
                            <label for="">Texto que aparecerá en el botón</label>
                            <input type="text" class="form-control" name="citaTextoLink" value="{{ $settings->confirmacionCita->textoLink }}">
                        </div>
                    </div>
                </div>
                
                <div class="row justify-content-center">
                    <div class="col-11">
                        <h3>Mensaje Mensaje Enviado</h3>
                        <div class="form-group">
                            <label for="">Titulo</label>
                            <input type="text" class="form-control" name="mensajeTitulo" value="{{ $settings->confirmacionMensaje->titulo }}">
                        </div>
                        <div class="form-group">
                            <label for="">Texto</label>
                            <textarea name="mensajeTexto" value="{{ $settings->confirmacionMensaje->texto }}" class="form-control" cols="30" rows="10">{{ $settings->confirmacionMensaje->texto }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">link</label>
                            <input type="text" class="form-control" name="mensajeLink" value="{{ $settings->confirmacionMensaje->link }}">
                        </div>
                        <div class="form-group">
                            <label for="">Texto que aparecerá en el botón</label>
                            <input type="text" class="form-control" name="mensajeTextoLink" value="{{ $settings->confirmacionMensaje->textoLink }}">
                        </div>
                    </div>
                </div>
                
                <div class="row justify-content-center">
                    <div class="col-11">
                        <h3>Mensaje al darse de alta al newsletter</h3>
                        <div class="form-group">
                            <label for="">Titulo</label>
                            <input type="text" class="form-control" name="newsTitulo" value="{{ $settings->confirmacionNews->titulo }}">
                        </div>
                        <div class="form-group">
                            <label for="">Texto</label>
                            <textarea name="newsTexto" value="{{ $settings->confirmacionNews->texto }}" class="form-control" cols="30" rows="10">{{ $settings->confirmacionNews->texto }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">link</label>
                            <input type="text" class="form-control" name="newsLink" value="{{ $settings->confirmacionNews->link }}">
                        </div>
                        <div class="form-group">
                            <label for="">Texto que aparecerá en el botón</label>
                            <input type="text" class="form-control" name="newsTextoLink" value="{{ $settings->confirmacionNews->textoLink }}">
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-10 text-center">
                        <button type="submit" class="btn btn-secondary">Guardar Cambios</button>
                    </div>
                </div>
            </form>
         </div>
     </div>
 </div>
</div>
 @include('backend.layouts.footers.footer')
@endsection