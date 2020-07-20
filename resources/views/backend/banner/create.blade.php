@extends('backend.layouts.app')


@section('page_title')
Crear Banner
@endsection



@section('dashboard_buttons')
<a class="btn btn-sm btn-secondary" href="{{ route('banner.index') }}">
    <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de banners
</a>
@endsection



@section('content')
<div class="row justify-content-center pt-5">
    <div class="col-12 col-lg-10">
        <form action="{{ route('banner.store') }}" class="form" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row align-items-center">
                <div class="form-group col-12">
                    <input type="text" name="titulo" placeholder="Ttulo" class="form-control">
                </div>
                <div class="form-group col-12">
                    <input type="text" name="url" placeholder="Link" class="form-control">
                </div>
                <div class="form-group col-12">
                    <input type="text" name="descripcion" placeholder="Descripción" class="form-control">
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
                    <h6>Imagen</h6>
                    <hr>
                    <label for="exampleFormControlFile1">Subir fotografia 16:9</label>
                    <input type="file" class="form-control-file" id="photo" name="img_path">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-12 text-center">
                    <button type="submit" class="btn btn-secondary">
                        Crear Banner
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>

@endsection