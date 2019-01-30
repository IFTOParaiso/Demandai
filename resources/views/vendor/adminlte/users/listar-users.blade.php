@extends('adminlte::page')

@section('title', 'Demandaí')

@section('content_header')
    <section class="content-header">
        <div>
            <a class="btn btn-success"
               href="{{url('cadastrar-usuario','propi')}}"> Cadastrar novo Usuário Propi</a>
        </div>

    </section>
@stop

@section('content')
            <section class="content">
                <div class="row">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3><i class="fa fa-users"></i> Usuários</h3>
                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="box-body">
                                <table id="usuarios-propi" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Lattes</th>
                                    </thead>
                                    <tbody>
                                    @forelse($users as $user)
                                        <tr>
                                            <td>
                                                <a href="{{url('detalhe-pesquisador/show',$user->id)}}" class="col-sm-12"><span
                                                            class="text">{{$user->name}}</span></a>
                                            </td>
                                            <td>
                                                <span class="text">{{$user->email}}</span>
                                            </td>
                                            <td>
                                                <a href="{{$user->lattes}}" target="_blank"><span class="text">{{$user->lattes}}</span></a>
                                            </td>
                                        </tr>
                                    @empty
                                        Não há registros

                                    @endforelse
                                    </tbody>
                                </table>
                            </div>

                        </div>
                </div>
            </section>
@stop