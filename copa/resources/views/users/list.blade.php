@extends('layouts.app')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-3">
                    @if(!isset($obj['upd']->first_name))
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Novo usuário</h3>
                        </div>
                        <form id="quickFormUser" action="{{ url('users/register') }}" method="POST" enctype="application/x-www-form-urlencoded">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="first_name">Nome</label>
                                    <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Insira nome ..." required />
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Sobrenome</label>
                                    <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Insira sobrenome ..." required />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Endereço de e-mail</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Insira e-mail ..." required />
                                </div>
                                <div class="form-group">
                                    <label for="Profiles">Perfil</label>
                                    <select name="profile_id" id="profile_id" class="form-control">
                                        @foreach($obj['profiles'] as $profile)
                                            <option value="{{ $profile->id }}">{{ $profile->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="password">Senha</label>
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Insira uma senha ..." required />
                                </div>
                            </div>
                            <div class="card-footer">
                                <input type="hidden" name="status" value="1" required />
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                    @else
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Editar usuário</h3>
                        </div>
                        <form id="quickFormUser" action="{{ url('users/update/'.$obj['upd']->id) }}" method="POST" enctype="application/x-www-form-urlencoded">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="first_name">Nome</label>
                                    <input value="{{ $obj['upd']->first_name }}" type="text" id="first_name" name="first_name" class="form-control" placeholder="Insira nome ..." required />
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Sobrenome</label>
                                    <input value="{{ $obj['upd']->last_name }}" type="text" id="last_name" name="last_name" class="form-control" placeholder="Insira sobrenome ..." required />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Endereço de e-mail</label>
                                    <input value="{{ $obj['upd']->email }}" type="email" id="email" name="email" class="form-control" placeholder="Insira e-mail ..." required />
                                </div>
                                <div class="form-group">
                                    <label for="password">Senha</label>
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Insira uma senha ..." />
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Atualizar</button>
                            </div>
                        </form>
                    </div>
                    @endif
                </div>
                <div class="col-12 col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Usuários cadastrados</h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Buscar ...">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Status</th>
                                        <th>Perfil</th>
                                        <th>Cadastro</th>
                                        <th>Ações</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($obj['users'] as $user)
                                    <tr>
                                        <td>{{ str_pad($user->id, 3, 0, STR_PAD_LEFT) }}</td>
                                        <td>
                                            {{ $user->first_name }} {{ $user->last_name }}
                                            <p class="text-small-gray">{{ $user->email }}</p>
                                        </td>
                                        <td>
                                            <strong class="{{ (($user->status == true) ? "text-success" : "text-danger") }}">
                                                {{ (($user->status == true) ? "Habilitado" : "Desabilitado") }}
                                            </strong>
                                        </td>
                                        <td>{{ $user->profile->name }}</td>
                                        <td>
                                            <span class="tag tag-success">
                                                {{ date('d/m/Y', strtotime($user->created_at)) }}
                                            </span>
                                        </td>
                                        <td style="padding-right: 2px">
                                            @if($user->id == \Auth::user()->id)<button type="button" class="btn btn-sm btn-warning btn-block" disabled="disabled">Desabilitar</button>
                                            @else<a onclick="return confirm('Deseja alterar o status este usuário?');" href="{{ url('users/status/'.$user->id) }}" type="button" class="btn btn-sm btn-block btn-warning">{{ (($user->status == true) ? "Desabilitar" : "Habilitar") }}</a>
                                            @endif
                                        </td>
                                        <td style="padding-left: 2px">
                                            <a type="button" onclick="return confirm('Deseja editar este usuário?');" href="{{ url('users/edit/'.$user->id) }}" type="button" class="btn btn-sm btn-success">Editar</a>
                                            @if($user->id == \Auth::user()->id)<button type="button" class="btn btn-sm btn-danger" disabled="disabled">Excluir</button>
                                            @else<a onclick="return confirm('Deseja remover este usuário?');" href="{{ url('users/destroy/'.$user->id) }}" type="button" class="btn btn-sm btn-danger">Excluir</a>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
