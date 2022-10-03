@extends('layouts.app')
@section('content')
    <style>.content-header {height: 0px!important;padding: 0!important}</style>
    <section class="content">
        <div class="container-fluid">
            <h1 class="text-center py-3">Fase de Grupos</h1>

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

            <h1 class="text-center py-3">Oitavas de Final</h1>
            <div class="row mb-3">
                <div class="col-12">
                    <div class="row">
                        @foreach ($obj['oitavas'] as $match)
                            <div class="oitavas-data-infos col-12 col-md-6 mb-3">
                                <div class="grupo">
                                    <div id="football" class="row">
                                        <div class="col-12">
                                            <div class="getResultado row mt-3" id="{{$match["id"]}}">
                                                <div class="col-5 text-left pt-1">
                                                    <div class="row">
                                                        <div class="pt-1 col-1">
                                                            <span class="selecao">
                                                                <a href="javascript:void(0)">1{{$match['classificado_casa']['chave']}}</a>
                                                            </span>
                                                        </div>
                                                        <div class="col-2">
                                                            <img class="pt-1 img-40 mg-l-40 w-100" src="{{ asset('assets/img/bandeiras/fifa.png') }}" alt="" />
                                                        </div>
                                                        <div class="col-9">
                                                            <select name="select-casa" id="{{'casa-'.$match['id']}}" class="selecao casa form-control">
                                                                <option value="">Selecione ...</option>
                                                                @foreach ($match['classificado_casa']['selecao'] as $casa)
                                                                    <option value="{{$casa['id']}}" data-confronto="{{$match['id']}}">{{$casa['selecao']}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-1 text-center px-0 pt-1">
                                                    <input name="input-resultado-confronto-casa" type="text" class="text-center form-control" />
                                                </div>
                                                <div class="col-1 text-center px-0 pt-1">
                                                    <input name="input-resultado-confronto-visitante" type="text" class="text-center form-control" />
                                                </div>
                                                <div class="col-5 text-left pt-1">
                                                    <div class="row">
                                                        <div class="col-9">
                                                            <select name="select-visitante" id="{{'visitante-'.$match['id']}}" class="selecao visitante form-control">
                                                                <option value="">Selecione ...</option>
                                                                @foreach ($match['classificado_visitante']['selecao'] as $casa)
                                                                    <option value="{{$casa['id']}}" data-confronto="{{$match['id']}}">{{$casa['selecao']}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-2 px-0">
                                                            <img class="pt-1 img-40 mg-r-40 w-100" src="{{ asset('assets/img/bandeiras/fifa.png') }}" alt="" />
                                                        </div>
                                                        <div class="pt-1 px-0 col-1">
                                                            <span class="selecao">
                                                                <a href="javascript:void(0)">2{{$match['classificado_visitante']['chave']}}</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
