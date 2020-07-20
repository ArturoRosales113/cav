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
            <div class="row align-items-center">
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

        </form>
    </div>
</div>

@endsection