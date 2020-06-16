@extends('backend.layouts.app')


@section('page_title')
Editar {{$aplication->display_name}}
@endsection



@section('dashboard_buttons')
<a class="btn btn-sm btn-secondary" href="{{ route('aplication.index') }}">
 <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de aplicaciones
</a>
@endsection



@section('content')
<div class="row justify-content-center pt-5">
    <div class="col-12 col-lg-8">
        <form action="{{route('aplication.update', $aplication->id) }}" method="POST" enctype="multipart/form-data">
            <div class="row justify-content-center">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put" />
                <div class="form-group col-12">
                    <label for="name">Nombre*</label>
                    <input type="text" name="name" value="{{ old('name',$aplication->display_name ) }}" placeholder="Nombre" class="form-control">
                    @if ($errors->has('name'))
                    <span class="help-block">
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        </span>
                    @endif
                </div>
                <div class="form-group col-12">
                    <label for="description">Descripción*</label>
                    <textarea name="description" id="" class="form-control" cols="10" placeholder="Descripción" rows="2">{{ old('description',$aplication->description ) }}</textarea>
                    @if ($errors->has('description'))
                    <span class="help-block">
                            <small class="text-danger">{{ $errors->first('description') }}</small>
                        </span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-4 text-center">
                    <img src="{{ $aplication->img_path == null ? asset('img/brand/no_img_found.png') : asset($aplication->img_path) }}" class="img-fluid" id="formLogoPreview" alt="">
                    @if ( $aplication->img_path != null)
                    <a class="btn btn-danger m-2" href="{{ route('aplication.delete', $aplication->id) }}" ><i class="fas fa-trash"></i></a>
                    @endif
                </div>
                <div class="form-group col-6">
                    <h6>Foto</h6>
                    <hr>
                    <label for="exampleFormControlFile1">Subir imagen</label>
                    <input type="file" class="form-control-file" name="img_path">
                  </div>
                <div class="w-100 py-3"></div>
                <div class="col-4">


                    @if ( $aplication->pdf_path != null)
                    <a href="{{asset($aplication->pdf_path)}}" target="_blank" class="btn btn-lg"><i class="fas fa-file-pdf fa-5x"></i> </a>
                    <a class="btn btn-danger" href="{{ route('aplication.pdf.delete', $aplication->id) }}" ><i class="fas fa-trash"></i></a>
                    @else
                    <img src="{{asset('img/brand/no_img_found.png')}}" class="img-fluid" id="formLogoPreview" alt="">
                    @endif
                </div>
                <div class="form-group col-6">
                    <h6>PDF</h6>
                    <hr>
                    <label for="exampleFormControlFile1">Subir PDF</label>
                    <input type="file" class="form-control-file" id="photo" name="pdf_path">
                  </div>
                <div class="form-group py-3 col-12 text-right">
                    <button class="btn btn-lg btn-secondary">Guardar cambios</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

