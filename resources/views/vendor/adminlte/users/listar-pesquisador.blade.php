@extends('adminlte::page')

@section('title', 'Demandaí')

@section('content_header')
    <section class="content-header">
        <h1>
            Lista de Usuários
        </h1>
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
                        <table id="usuarios-propi" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Formação</th>
                                <th>Status</th>
                                <th>Instituição</th>
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
                                        <td>Graduado</td>
                                    @elseif($user->formation == '3')
                                        <td>Doutor</td>
                                    @endif
                                    @if($user->status == '1')
                                    <td><p class="text" style="color: green">Ativado</p></td>
                                    @elseif($user->status == '0')
                                    <td><p class="text" style="color: red">Desativado</p></td>
                                    @endif
                                    <td>{{$user->institution_id}}</td>
                                </tr>
                            @empty
                                Não há usuários
                            @endforelse
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Formação</th>
                                <th>Status</th>
                                <th>Instituição</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop