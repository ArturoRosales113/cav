@if($tendencias->count() > 0)

<section>
    <div class="row justify-content-center py-5">
        <div class="col-10 col-md-4 text-center">
            <img src="{{ asset('img/2020.svg') }}" alt="" class="img-fluid">
        </div>
        <div class="w-100"></div>
        <div class="col-10">
            <div class="row">
                @foreach($tendencias as $t)
                <div class="col-6 col-md-3 py-2 py-lg-0">
                    <div class="card">
                        <img src="{{ asset($t->pics()->first()->path) }}" alt="" class="card-img">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif