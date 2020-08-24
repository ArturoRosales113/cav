@extends('backend.layouts.app')

@section('page_title')
Crear Noticia
@endsection



@section('dashboard_buttons')
<a class="btn btn-sm btn-secondary text-white" href="{{ route('post.index') }}">
    <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de articulos
</a>
@endsection


@section('content')
<div class="row justify-content-center pt-5">
    <div class="col-12 col-lg-10">
        <form action="{{ route('post.store') }}" class="form" method="POST" enctype="multipart/form-data">
            <div class="row">
                {{ csrf_field() }}
                <div class="form-group col-12">
                    <label for="name">Título</label>
                    <input type="text" name="title" value="{{ old('title') }}" placeholder="Nombre" class="form-control">
                    @if ($errors->has('title'))
                    <span class="help-block">
                        <small class="text-danger">{{ $errors->first('title') }}</small>
                    </span>
                    @endif
                </div>

                <div class="form-group col-12">
                    <label for="family_id">Familia</label>
                    <select class="custom-select" name="family_id">
                        <option value="0">Ninguna</option>
                        @foreach ($families as $fam)
                        <option value="{{ $fam->id }}" {{ old('family_id') == $fam->id ? 'selected' : ''}}>
                            {{ ucfirst($fam->display_name) }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('family'))
                    <span class="help-block">
                        <small class="text-danger">{{ $errors->first('family') }}</small>
                    </span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="{{ asset('img/brand/no_img_found.png') }}" alt="" class="img-fluid" id="formPhotoPreview">
                </div>
                <div class="form-group col-6">
                    <h6>Imagen de portada</h6>
                    <hr>
                    <label for="exampleFormControlFile1">Subir fotografia 16:9</label>
                    <input type="file" class="form-control-file" id="photo" name="img_path">
                </div>
            </div>
            <div class="row py-3">
                <div class="form-group col-12">
                    <label for="body">Cuerpo del post</label>
                    <textarea name="body" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="custom-control custom-checkbox form-group col-12 text-center p-3">
                    <input type="checkbox" class="custom-control-input" id="is_draft" name="is_draft">
                    <label class="custom-control-label" for="is_trend">Marcar como borrador</label>
                </div>
                <div class="form-group col-12 text-center">
                    <button class="btn btn-lg btn-secondary">Crear</button>
                </div>
            </div>

        </form>
    </div>
</div>

@endsection