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
                                    <td>{{$user->formation}}</td>
                                    <td>{{$user->status}}</td>
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