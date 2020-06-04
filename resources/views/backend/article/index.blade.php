@extends('backend.layouts.app')

@section('page_title')
Productos
@endsection



@section('dashboard_buttons')
<a class="btn btn-sm btn-success text-white" href="{{ route('article.create') }}"><i class="fas fa-plus-square"></i>&nbsp;Crear producto nuevo</a>
@endsection

@section('content')

    @include('backend.layouts.products_dashboard_menu')
    <div class="row my-5 justify-content-center">
        <div class="col-12 col-lg-10">
            <table class="table" id="articles_table">
                <thead>
                <tr class="text-center">
                <th scope="col"><small>Nombre</small></th>
                <th scope="col"><small>Familia</small></th>
                <th scope="col"><small>Categoria</small></th>
                <th scope="col"><small>Descricpción</small></th>
                <th scope="col"><small>Acciones</small></th>
                </tr>
                </thead>
                <tbody>
                @foreach($articles as $a)
                <tr class="text-center">


                    <td>
                    {{ $a -> estilo }}
                    </td>

                <td>
                    @if ($a->marca_id != null)
                    {{ $a->marca->display_name }}
                    @else
                    <small>Sin Marca</small>
                    @endif
                    </td>

                    <td>
                    @if ($a->concept_id != null)
                    {{ $a->concept->display_name }}
                    @else
                    <small>Sin Concepto</small>
                    @endif
                    </td>

                    <td>
                    @if ($a->clasification_id != null)
                    {{ $a->clasification->display_name }}
                    @else
                    <small>Sin Clasificación</small>
                    @endif
                    </td>

                <td>
                    <small>{{ $a -> description }}</small>
                </td>

                    <td class="d-flex flex-row justify-content-center">

                    <a class="btn btn-info btn-icon btn-sm btn-neutral" href="{{route('article.edit',$a -> id)}}">
                    <i class="fa fa-edit"></i>
                    </a>

                    <a class="btn btn-default btn-icon btn-sm btn-neutral" href="{{ route('article.pictures', $a->id) }}">
                    <i class="fas fa-camera-retro"></i>
                    </a>

                    <a class="btn btn-warning btn-icon btn-sm btn-neutral" href="{{route('article.show',$a -> id)}}">
                    <i class="fas fa-eye"></i>
                    </a>

                    @if ($a->pics->count() > 0)
                    <a class="btn btn-success btn-icon btn-sm btn-neutral" href="{{ route('front.vestido',$a->slug) }}">
                        <i class="fas fa-globe-americas"></i>
                    </a>
                    @endif

                    {{Form::open([ 'method'  => 'delete', 'route' => [ 'article.destroy',$a -> id ] ])}}
                    {{ Form::button('<i class="fas fa-times"></i>', ['type'=>'submit','class' => 'btn btn-danger btn-icon btn-sm btn-neutral']) }}
                    {{ Form::close() }}

                    </td>

                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

