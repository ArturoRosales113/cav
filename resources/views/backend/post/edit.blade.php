<form action="{{ route('post.update',$post->id) }}" class="form" method="POST" enctype="multipart/form-data">
    <div class="row">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put" />
        <div class="form-group col-12">
            <label for="name">Título</label>
            <input type="text" name="title" value="{{ old('title',$post->title) }}" placeholder="Nombre" class="form-control">
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
                <option value="{{ $fam->id }}" {{ $fam->id == $post->family_id ? 'selected' : ''}}>
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
            <img src="{{ $post->img_path == null ? asset('img/brand/no_img_found.png') : asset($post->img_path) }}" alt="" class="img-fluid" id="formPhotoPreview">
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
            <textarea name="body" id="" cols="30" rows="10">
                {{ $post->body }}
            </textarea>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="custom-control custom-checkbox form-group col-12 text-center p-3">
            <input type="checkbox" class="custom-control-input" id="is_draft" name="is_draft">
            <label class="custom-control-label" for="is_trend">Marcar como borrador</label>
        </div>
        <div class="form-group col-12 text-center">
            <button class="btn btn-lg btn-secondary">Actualizar</button>
        </div>
    </div>

</form>
