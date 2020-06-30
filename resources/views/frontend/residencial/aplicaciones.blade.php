@extends('frontend.layoutsR.app')


@section('page_banner')
    <div class="row aplications align-items-center">
        <div class="col text-center text-white">
            <h4 class="bold">Aplicaciones Residencial</h4>
        </div>
    </div>
@endsection


@section('content')
    <div class="row justify-content-center py-5">
        <div class="col-10">
            <div class="row">
                <div class="col-3">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Cras justo odio
                          <span class="badge badge-primary badge-pill">12</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Dapibus ac facilisis in
                          <span class="badge badge-primary badge-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Morbi leo risus
                          <span class="badge badge-primary badge-pill">1</span>
                        </li>
                      </ul>
                </div>
                <div class="col-9">
                    <div class="row">
                        <div class="col-8">
                            <img src="http://lorempixel.com/1920/1080/technics/" class="img-fluid"  alt="">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos alias, fuga saepe expedita sunt fugit at! Obcaecati repellat explicabo nam. Tempora est deserunt beatae nulla perferendis incidunt dolorem, at adipisci?</p>
                        </div>
                        <div class="col-4">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    Cras justo odio
                                </li>
                                <li class="list-group-item">
                                    Dapibus ac facilisis in
                                </li>
                                <li class="list-group-item">
                                    Morbi leo risus
                                </li>
                                <li class="list-group-item">
                                    Porta ac consectetur ac
                                </li>
                                <li class="list-group-item">
                                    Vestibulum at eros
                                </li>
                              </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
