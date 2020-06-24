@extends('frontend.layouts.app')

@section('page_banner')
    <div class="row products align-items-center">
        <div class="col text-center text-white">
            <h4 class="bold">una gama completa de sistemas automáticos</h4>
        </div>
    </div>
@endsection


@section('content')
<section>
    <div class="row justify-content-around aling-items-center py-5">
        <div class="col-lg-4">
            <div class="accordion" id="products_collapse">
                @foreach ($categories as $c)
                <div class="card">
                  <div class="card-header" id="{{ $c -> name.'-heading' }}">
                      <button
                      class="btn btn-link btn-block text-left text-uppercase text-dark"
                      type="button" data-toggle="collapse"
                      data-target="{{ '#'.$c -> name.'-collapse' }}"
                      aria-controls="{{ $c -> name.'-collapse' }}"
                      aria-expanded="false"
                      >
                        {{ $c -> display_name }}
                      </button>
                  </div>

                  <div id="{{ $c -> name.'-collapse' }}" class="collapse" aria-labelledby="{{ '#'.$c -> name.'-heading' }}" data-parent="#products_collapse">
                    <div class="card-body">
                    </div>
                  </div>

                </div>
                @endforeach
            </div>
        </div>
        <div class="col-7">

        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-10">
            
        </div>
    </div>
</section>
@endsection
