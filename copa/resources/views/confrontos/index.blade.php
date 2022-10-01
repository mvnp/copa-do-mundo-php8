@extends('layouts.app')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-12 col-md-4" style="overflow: hidden">
                    <h3>Grupo A</h3>
                    <div class="grupo">
                        <div id="football" class="row">
                            @foreach($obj['grupo_a'] as $a)
                            <div class="col-12">
                                <div class="row mt-3">
                                    <div class="col-5 text-left">
                                        <img class="img-40 mg-r-40" src="{{ asset('assets/img/bandeiras/'.$a->selecaoCasa->id.'.png') }}" alt="" />
                                        <span class="selecao">{{$a->selecaoCasa->selecao}}</span>
                                    </div>
                                    <div class="col-1 text-center px-0">
                                        <input type="text" class="text-center form-control" data-confronto="{{$a->id}}" />
                                    </div>
                                    <div class="col-1 text-center px-0">
                                        <input type="text" class="text-center form-control" data-confronto="{{$a->id}}" />
                                    </div>
                                    <div class="col-5 text-right">
                                        <span class="selecao">{{$a->selecaoVisitante->selecao}}</span>
                                        <img class="img-40 mg-l-40" src="{{ asset('assets/img/bandeiras/'.$a->selecaoVisitante->id.'.png') }}" alt="" />
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <h3>Grupo B</h3>
                    <div class="grupo">
                        <div id="football" class="row">
                            @foreach($obj['grupo_b'] as $a)
                            <div class="col-12">
                                <div class="row mt-3">
                                    <div class="col-5 text-left">
                                        <img class="img-40 mg-r-40" src="{{ asset('assets/img/bandeiras/'.$a->selecaoCasa->id.'.png') }}" alt="" />
                                        <span class="selecao">{{$a->selecaoCasa->selecao}}</span>
                                    </div>
                                    <div class="col-1 text-center px-0">
                                        <input type="text" class="text-center form-control" data-confronto="{{$a->id}}" />
                                    </div>
                                    <div class="col-1 text-center px-0">
                                        <input type="text" class="text-center form-control" data-confronto="{{$a->id}}" />
                                    </div>
                                    <div class="col-5 text-right">
                                        <span class="selecao">{{$a->selecaoVisitante->selecao}}</span>
                                        <img class="img-40 mg-l-40" src="{{ asset('assets/img/bandeiras/'.$a->selecaoVisitante->id.'.png') }}" alt="" />
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <h3>Grupo C</h3>
                    <div class="grupo">
                        <div id="football" class="row">
                            @foreach($obj['grupo_c'] as $a)
                            <div class="col-12">
                                <div class="row mt-3">
                                    <div class="col-5 text-left">
                                        <img class="img-40 mg-r-40" src="{{ asset('assets/img/bandeiras/'.$a->selecaoCasa->id.'.png') }}" alt="" />
                                        <span class="selecao">{{$a->selecaoCasa->selecao}}</span>
                                    </div>
                                    <div class="col-1 text-center px-0">
                                        <input type="text" class="text-center form-control" data-confronto="{{$a->id}}" />
                                    </div>
                                    <div class="col-1 text-center px-0">
                                        <input type="text" class="text-center form-control" data-confronto="{{$a->id}}" />
                                    </div>
                                    <div class="col-5 text-right">
                                        <span class="selecao">{{$a->selecaoVisitante->selecao}}</span>
                                        <img class="img-40 mg-l-40" src="{{ asset('assets/img/bandeiras/'.$a->selecaoVisitante->id.'.png') }}" alt="" />
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12 col-md-4">
                    <h3>Grupo D</h3>
                    <div class="grupo">
                        <div id="football" class="row">
                            @foreach($obj['grupo_d'] as $a)
                            <div class="col-12">
                                <div class="row mt-3">
                                    <div class="col-5 text-left">
                                        <img class="img-40 mg-r-40" src="{{ asset('assets/img/bandeiras/'.$a->selecaoCasa->id.'.png') }}" alt="" />
                                        <span class="selecao">{{$a->selecaoCasa->selecao}}</span>
                                    </div>
                                    <div class="col-1 text-center px-0">
                                        <input type="text" class="text-center form-control" data-confronto="{{$a->id}}" />
                                    </div>
                                    <div class="col-1 text-center px-0">
                                        <input type="text" class="text-center form-control" data-confronto="{{$a->id}}" />
                                    </div>
                                    <div class="col-5 text-right">
                                        <span class="selecao">{{$a->selecaoVisitante->selecao}}</span>
                                        <img class="img-40 mg-l-40" src="{{ asset('assets/img/bandeiras/'.$a->selecaoVisitante->id.'.png') }}" alt="" />
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex" style="align-items: center; justify-content: center">
                    <img class="w-100" src="https://i.pinimg.com/originals/ec/82/a5/ec82a51e2d701406118f5d010b7fa0ab.png" alt="World Cup 2022" />
                </div>
                <div class="col-12 col-md-4">
                    <h3>Grupo E</h3>
                    <div class="grupo">
                        <div id="football" class="row">
                            @foreach($obj['grupo_e'] as $a)
                            <div class="col-12">
                                <div class="row mt-3">
                                    <div class="col-5 text-left">
                                        <img class="img-40 mg-r-40" src="{{ asset('assets/img/bandeiras/'.$a->selecaoCasa->id.'.png') }}" alt="" />
                                        <span class="selecao">{{$a->selecaoCasa->selecao}}</span>
                                    </div>
                                    <div class="col-1 text-center px-0">
                                        <input type="text" class="text-center form-control" data-confronto="{{$a->id}}" />
                                    </div>
                                    <div class="col-1 text-center px-0">
                                        <input type="text" class="text-center form-control" data-confronto="{{$a->id}}" />
                                    </div>
                                    <div class="col-5 text-right">
                                        <span class="selecao">{{$a->selecaoVisitante->selecao}}</span>
                                        <img class="img-40 mg-l-40" src="{{ asset('assets/img/bandeiras/'.$a->selecaoVisitante->id.'.png') }}" alt="" />
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12 col-md-4">
                    <h3>Grupo F</h3>
                    <div class="grupo">
                        <div id="football" class="row">
                            @foreach($obj['grupo_f'] as $a)
                            <div class="col-12">
                                <div class="row mt-3">
                                    <div class="col-5 text-left">
                                        <img class="img-40 mg-r-40" src="{{ asset('assets/img/bandeiras/'.$a->selecaoCasa->id.'.png') }}" alt="" />
                                        <span class="selecao">{{$a->selecaoCasa->selecao}}</span>
                                    </div>
                                    <div class="col-1 text-center px-0">
                                        <input type="text" class="text-center form-control" data-confronto="{{$a->id}}" />
                                    </div>
                                    <div class="col-1 text-center px-0">
                                        <input type="text" class="text-center form-control" data-confronto="{{$a->id}}" />
                                    </div>
                                    <div class="col-5 text-right">
                                        <span class="selecao">{{$a->selecaoVisitante->selecao}}</span>
                                        <img class="img-40 mg-l-40" src="{{ asset('assets/img/bandeiras/'.$a->selecaoVisitante->id.'.png') }}" alt="" />
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <h3>Grupo G</h3>
                    <div class="grupo">
                        <div id="football" class="row">
                            @foreach($obj['grupo_g'] as $a)
                            <div class="col-12">
                                <div class="row mt-3">
                                    <div class="col-5 text-left">
                                        <img class="img-40 mg-r-40" src="{{ asset('assets/img/bandeiras/'.$a->selecaoCasa->id.'.png') }}" alt="" />
                                        <span class="selecao">{{$a->selecaoCasa->selecao}}</span>
                                    </div>
                                    <div class="col-1 text-center px-0">
                                        <input type="text" class="text-center form-control" data-confronto="{{$a->id}}" />
                                    </div>
                                    <div class="col-1 text-center px-0">
                                        <input type="text" class="text-center form-control" data-confronto="{{$a->id}}" />
                                    </div>
                                    <div class="col-5 text-right">
                                        <span class="selecao">{{$a->selecaoVisitante->selecao}}</span>
                                        <img class="img-40 mg-l-40" src="{{ asset('assets/img/bandeiras/'.$a->selecaoVisitante->id.'.png') }}" alt="" />
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <h3>Grupo H</h3>
                    <div class="grupo">
                        <div id="football" class="row">
                            @foreach($obj['grupo_h'] as $a)
                            <div class="col-12">
                                <div class="row mt-3">
                                    <div class="col-5 text-left">
                                        <img class="img-40 mg-r-40" src="{{ asset('assets/img/bandeiras/'.$a->selecaoCasa->id.'.png') }}" alt="" />
                                        <span class="selecao">{{$a->selecaoCasa->selecao}}</span>
                                    </div>
                                    <div class="col-1 text-center px-0">
                                        <input type="text" class="text-center form-control" data-confronto="{{$a->id}}" />
                                    </div>
                                    <div class="col-1 text-center px-0">
                                        <input type="text" class="text-center form-control" data-confronto="{{$a->id}}" />
                                    </div>
                                    <div class="col-5 text-right">
                                        <span class="selecao">{{$a->selecaoVisitante->selecao}}</span>
                                        <img class="img-40 mg-l-40" src="{{ asset('assets/img/bandeiras/'.$a->selecaoVisitante->id.'.png') }}" alt="" />
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
