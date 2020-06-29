<form action="{{ route('aplication.update', $aplication->id) }}" class="form" method="PUT" enctype="multipart/form-data">
    <div class="row">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put" />
        <div class="form-group col-12">
            <label for="name">Nombre de la aplicacion</label>
            <input type="text" name="name" value="{{ old('name', $aplication->display_name) }}" placeholder="Nombre" class="form-control">
            @if ($errors->has('name'))
            <span class="help-block">
                 <small class="text-danger">{{ $errors->first('name') }}</small>
             </span>
            @endif
        </div>

        <div class="form-group col-12">
            <label for="description">Descripción</label>
            <textarea name="description" id="" class="form-control" cols="5" placeholder="Descripción" rows="2">{{ old('description', $aplication->description) }}</textarea>
            @if ($errors->has('description'))
            <span class="help-block">
                 <small class="text-danger">{{ $errors->first('description') }}</small>
             </span>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="form-group col-6">
            <label for="family_id">Familia</label>
            <select class="custom-select" name="family_id">
                <option value="0">Ninguna</option>
                @foreach ($families as $fam)
                    <option value="{{ $fam->id }}" {{ old('family_id') == $fam->id ? 'selected' : ''}}>{{ $fam->display_name }}</option>
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
            <button class="btn btn-lg btn-secondary">Actualizar</button>
        </div>
    </div>


</form>