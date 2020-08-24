@extends('backend.layouts.app')

@section('page_title')
{{ $article->display_name }}
@endsection

@section('dashboard_buttons')
<a class="btn btn-sm btn-secondary" href="{{ route('article.index') }}">
    <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de articulos
</a>
@endsection

@section('content')
<div class="row justify-content-center py-3">
    <div class="col-10">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">
                    {{ $article->name }}
                </h2>
            </div>
            <div class="card-body">
                <hr>
                @include('backend.article.edit',['article' => $article])
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center py-3">
    <div class="col-10">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Imágenes del producto
                </h3>
            </div>
            <div class="card-body bg-light">
                <div class="row">
                    <div class="col-12 ">
                        <form action="{{ route('pic.store') }}" method="POST" enctype="multipart/form-data"
                            id="article-pictures-create">
                            @csrf
                            <input type="hidden" name="id" value="{{ $article->id }}">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFileLang" name="photos[]"
                                    lang="es" multiple>
                                <label class="custom-file-label" for="customFileLang">Seleccionar Imágenes</label>
                            </div>
                            <div class="form-group py-3">
                                <button type="submit" class="btn btn-primary">Subir imagenes</button>
                            </div>
                        </form>
                        <hr>
                    </div>

                    <div class="col-12">
                        <div class="card-columns">
                            @foreach ($article->pics as $ap)
                            <div class="card">
                                <img class="card-img-top" src="{{ asset($ap->path) }}" alt="">
                                <div class="card-body text-center">
                                    <form action="{{ route('pic.destroy', $ap->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="delete" />
                                        <button class="btn btn-danger"><i
                                            class="fa fa-trash"></i>&nbsp;Borrar </button>
                                    </form>
                                  
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center py-3">
    <div class="col-10">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Descargas del producto
                </h3>
            </div>
            <div class="card-body bg-light">
                <div class="row">
                    <div class="col-12 ">
                        <form action="{{ route('download.store') }}" method="POST" enctype="multipart/form-data"
                            id="article-pictures-create">
                            @csrf
                            <input type="hidden" name="id" value="{{ $article->id }}">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFileLang" name="files[]"
                                    lang="es" multiple>
                                <label class="custom-file-label" for="customFileLang">Seleccionar Archivos</label>
                            </div>
                            <div class="form-group py-3">
                                <button type="submit" class="btn btn-primary">Subir Documentos</button>
                            </div>
                        </form>
                        <hr>
                    </div>

                    <div class="col-12">
                        <div class="card-columns">
                            @foreach ($article->downloads as $ad)
                            <div class="card">
                                <div class="card-body text-center">
                                    <a href="{{ asset($ad->path) }}" target="_blank" class="btn btn-lg"><i
                                            class="far fa-file-pdf fa-5x"></i></a>
                                    <br>
                                    <a href="{{ route('download.delete', $ad->id) }}" class="btn btn-danger"><i
                                            class="fa fa-trash"></i>&nbsp;Borrar </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection