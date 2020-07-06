<form action="{{ route('proyect.update', $proyect ->id) }}" class="form" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="put" />

    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="name">Nombre del proyecto</label>
                <input type="text" name="name" value="{{ old('name', $proyect -> name) }}" placeholder="Nombre"
                    class="form-control">
                @if ($errors->has('name'))
                <span class="help-block">
                    <small class="text-danger">{{ $errors->first('name') }}</small>
                </span>
                @endif
            </div>

            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea name="description" id="" class="form-control" cols="5" placeholder="Descripción"
                    rows="2">{{ old('description', $proyect ->description) }}</textarea>
                @if ($errors->has('description'))
                <span class="help-block">
                    <small class="text-danger">{{ $errors->first('description') }}</small>
                </span>
                @endif
            </div>
        </div>
        <div class="col-6">
            <div class="row align-items-center py-2">
                <div class="col-4 text-center">
                    @if( $proyect ->img_path != null )
                    <img src="{{ asset($proyect ->img_path) }}" alt="" class="img-fluid" id="formLogoPreview">
                    <hr>
                    <a class="btn btn-danger" href="{{ route('proyect.delete', $proyect ->id) }}"><i
                            class="fas fa-trash"></i></a>
                    @else
                    <img src="{{ asset('img/brand/no_img_found.png') }}" alt="" class="img-fluid" id="formLogoPreview">
                    @endif
                </div>
                <div class="form-group col-6">
                    <h6>Foto</h6>
                    <hr>
                    <label for="exampleFormControlFile1">Subir imagen</label>
                    <input type="file" class="form-control-file" name="img_path">
                </div>
            </div>
            <div class="row py-2">
                <div class="col-4 text-center">
                    @if ( $proyect -> banner_path != null)
                    <img src="{{ asset($proyect -> banner_path) }}" alt="" class="img-fluid" id="formLogoPreview">
                    <hr>
                    <a class="btn btn-danger" href="{{ route('proyect.delete', $proyect ->id) }}"><i
                            class="fas fa-trash"></i></a>
                    @else
                    <img src="{{asset('img/brand/no_img_found.png') }}" alt="" class="img-fluid" id="formLogoPreview">
                    @endif
                </div>
                <div class="form-group col-6">
                    <h6>Banner</h6>
                    <hr>
                    <label for="exampleFormControlFile1">Subir banner</label>
                    <input type="file" class="form-control-file" name="banner_path">
                </div>
            </div>
            <div class="row align-items-center py-2">
                <div class="col-4 text-center">
                    @if ( $proyect ->pdf_path != null)
                    <a href="{{ asset($proyect ->pdf_path) }}" class="btn btn-outline-dark">
                        <i class="far fa-file-pdf fa-3x"></i>
                    </a>
                    <a class="btn btn-danger" href="{{ route('proyect.pdf.delete', $proyect ->id) }}"><i
                            class="fas fa-trash"></i></a>
                    @else
                    <img src="{{asset('img/brand/no_img_found.png') }}" alt="" class="img-fluid" id="formLogoPreview">
                    @endif
                </div>
                <div class="form-group col-6">
                    <h6>PDF</h6>
                    <label for="exampleFormControlFile1">Subir PDF</label>
                    <input type="file" class="form-control-file" id="photo" name="pdf_path">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-left">
            <button type="submit" class="btn btn-secondary">Actualizar</button>
        </div>
    </div>




</form>