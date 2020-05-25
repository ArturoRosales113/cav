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
             <form action="{{ route('app.navsettings') }}" method="POST" class="form" enctype="multipart/form-data">
                {{ csrf_field() }}
                @foreach($nav as $n => $i)
                <div class="row justify-content-center {{ !$loop->last  ? 'py-5' : ''}}">
                    <div class="col-11">
                        <h3>Slide {{ $loop->iteration }}</h3>
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset($i->img) }}" class="img-fluid"  alt="">
                            </div>
                            <div class="col-8">
                                <div class="form-group py-2">
                                    <label for="">Título</label>
                                    <input type="text" class="form-control" name="frame{{$loop->iteration}}_title" value="{{ $i->title }}">
                                    @if ($errors->has('frame'.$loop->iteration.'_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('frame'.$loop->iteration.'_title') }}</strong>
                                    </span>
                                @endif

                                </div>
                                <div class="form-group py-2">
                                    <label for="">Texto</label>
                                    <textarea name="frame{{$loop->iteration}}_text" value="{{ $i->text }}" class="form-control" cols="30" rows="10">{{ $i->text }}</textarea>
                                    @if ($errors->has('frame'.$loop->iteration.'_text'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('frame'.$loop->iteration.'_text') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="form-group py-2">
                                    <label for="">Link</label>
                                    <input type="text" class="form-control" name="frame{{$loop->iteration}}_link" value="{{ $i->link }}">
                                    @if ($errors->has('frame'.$loop->iteration.'_link'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('frame'.$loop->iteration.'_link') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="frame{{$loop->iteration}}_img" name="frame{{$loop->iteration}}_img">
                                    <label class="custom-file-label" for="frame{{$loop->iteration}}_img">{{ $i->img }}</label>
                                    @if ($errors->has('frame'.$loop->iteration.'_img'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('frame'.$loop->iteration.'_img') }}</strong>
                                    </span>
                                @endif
                                  </div>
                            </div>

                        </div>                        
                    </div>
                </div>
                @if(!$loop->last)
                <hr>
                @endif
                @endforeach
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