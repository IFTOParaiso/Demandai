@extends('adminlte::page')

@section('title', 'Demandaí')

@section('content_header')
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header">
            <i class="ion ion-clipboard"></i>

            <h3 class="box-title">Pesquisadores</h3>
            @if($tipouser == 1)
            <div class="box-tools pull-right">
                <a href="{{url('cadastrar-usuario/pesquisador')}}" type="button" class="btn btn-default pull-right"><i class="fa fa-user-plus"></i> Cadasrtar Pesquisador</a>
            </div>
            @endif
        </div>

        <div class="box-body">

            <ul class="todo-list">
                @forelse($users as $user)
                    <li class="col-sm-12">
                        <a href="{{url('detalhe-pesquisador/show',$user->id)}}" class="col-sm-12">
                            <span class="text">{{$user->name}}</span>
                        </a>
                    </li>
                @empty
                    Não há usuários
                @endforelse
            </ul>
        </div>
    </div>
@stop