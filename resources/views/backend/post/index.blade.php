@extends('backend.layouts.app')

@section('page_title')
Noticias
@endsection



@section('dashboard_buttons')
<a class="btn btn-sm btn-success text-white" href="{{ route('post.create') }}"><i
        class="fas fa-plus-square"></i>&nbsp;Crear Noticia</a>
@endsection

@section('content')

<div class="row my-5 justify-content-center">
    <div class="col-12 col-lg-10">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            @foreach ($families as $fam)
            <li class="nav-item">
                <a class="nav-link {{ $loop->first ? 'active' : '' }}" id="{{ $fam->name.'-tab' }}" data-toggle="tab" href="#{{ $fam->name }}" role="tab" aria-controls="{{ $fam->name }}" aria-selected="true">
                    {{ ucfirst($fam->display_name) }}
                </a>
            </li>
            @endforeach
          </ul>
          <div class="tab-content" id="myTabContent">
            @foreach ($families as $fam)
            <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" id="{{ $fam->name }}" role="tabpanel" aria-labelledby="{{ $fam->name.'-tab' }}">
                <div class="list-group-flush py-5">
                  
                        @foreach ($fam->posts as $p)
                        <li class="list-group-item d-block justify-content-between align-items-center">
                            <div class="row align-items-center">
                                <div class="col">
                                    <img src="{{ $p->img_path != null ? asset($p->img_path) : asset('img/brand/no_img_found.png') }}"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="col-12 col-md-9">
                                    <h6>
                                        {{$p -> title }}
                                    </h6>
                                    <p class="text-justify d-block">
                                        {{ preg_replace('/\s+?(\S+)?$/', '', substr($p->body, 0, 70)) }}
                                    </p>

                                    <div class="row">

                                        <a class="btn btn-warning ml-2" href="{{route('post.show',$p -> id)}}">
                                            <i class="fas fa-eye"></i>
                                        </a>

                                        <button type="button" class="btn btn-danger ml-2" data-toggle="modal" data-target="#eraseModal"
                                            data-route="{{ route('post.destroy', $p -> id ) }}" data-title="{{ $p -> title }}"
                                            data-id="{{ $p -> id }}">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                </div>
            </div>
            @endforeach           
          </div>
    </div>
  </div>


@endsection