@extends('adminlte::page')

@section('title', 'Demandaí')

@section('content_header')
    <section class="content-header">
        <h1>
            Lista de Usuários
        </h1>
        <a class="btn btn-sm fa fa-user-plus pull-right" role="button"
           href="{{url('cadastrar-usuario',$tipo_usuario)}}"> Cadastrar Novo Usuário</a>
    </section>
@stop

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Usuários do Tipo PESQUISADOR</h3>
                    </div>
                    <div class="box-body">
                        <table id="usuarios-pesquisador" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Formação</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    @if($user->formation == '1')
                                        <td>Graduado</td>
                                    @elseif($user->formation == '2')
                                        <td>Mestre</td>
                                    @elseif($user->formation == '3')
                                        <td>Doutor</td>
                                    @endif
                                    @if($user->status == '1')
                                    <td><p class="text" style="color: green">Ativado</p></td>
                                    @elseif($user->status == '0')
                                    <td><p class="text" style="color: red">Desativado</p></td>
                                    @endif
                                    <td>
                                        <a class="btn btn-sm fa fa-info-circle" role="button" style="color: khaki"
                                           href="{{url('detalhe-pesquisador/show',$user->id)}}"> Ver Detalhes</a>
                                    </td>
                                </tr>
                            @empty
                                Não há usuários
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop