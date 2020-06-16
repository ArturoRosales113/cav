@extends('backend.layouts.app')


@section('page_title')
Crear Aplicación
@endsection



@section('dashboard_buttons')
<a class="btn btn-sm btn-secondary" href="{{ route('aplication.index') }}">
 <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de aplicaciones
</a>
@endsection



@section('content')
    <div class="row justify-content-center pt-5">
        <div class="col-12 col-lg-10">
            <form action="{{ route('aplication.store') }}" class="form" method="POST" enctype="multipart/form-data">
                <div class="row">
                    {{ csrf_field() }}
                    <div class="form-group col-12">
                        <label for="name">Nombre de la aplicacion</label>
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Nombre" class="form-control">
                        @if ($errors->has('name'))
                        <span class="help-block">
                             <small class="text-danger">{{ $errors->first('name') }}</small>
                         </span>
                        @endif
                    </div>

                    <div class="form-group col-12">
                        <label for="description">Descripción</label>
                        <textarea name="description" id="" class="form-control" cols="5" placeholder="Descripción" rows="2">{{ old('description') }}</textarea>
                        @if ($errors->has('description'))
                        <span class="help-block">
                             <small class="text-danger">{{ $errors->first('description') }}</small>
                         </span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <img src="{{ asset('img/brand/no_img_found.png') }}" alt="" class="img-fluid" id="formLogoPreview">
                    </div>
                    <div class="form-group col-6">
                        <h6>Foto</h6>
                        <hr>
                        <label for="exampleFormControlFile1">Subir imagen</label>
                        <input type="file" class="form-control-file" name="img_path">
                      </div>
                    <div class="w-100 py-3"></div>
                    <div class="col-4">
                        <img src="{{ asset('img/brand/no_img_found.png') }}" alt="" class="img-fluid" id="formPhotoPreview">
                    </div>
                    <div class="form-group col-6">
                        <h6>PDF</h6>
                        <hr>
                        <label for="exampleFormControlFile1">Subir PDF</label>
                        <input type="file" class="form-control-file" id="photo" name="pdf_path">
                      </div>
                    <div class="form-group py-3 col-12 text-right">
                        <button class="btn btn-lg btn-secondary">Crear</button>
                    </div>
                </div>


            </form>
        </div>
    </div>

@endsection
