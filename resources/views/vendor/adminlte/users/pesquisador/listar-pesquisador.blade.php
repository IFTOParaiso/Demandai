@extends('adminlte::page')

@section('title', 'Demandaí')

@section('content_header')
    <section class="content-header">
        <div>
            {{--@if($tipouser == 1 || $tipouser == 2)--}}
                <a class="btn btn-success"
                   href="{{url('cadastrar-usuario',$tipo_usuario)}}"> Cadastrar novo Pesquisador</a>
            {{--@endif--}}
        </div>

    </section>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header">
            <i class="ion ion-clipboard"></i>

            <h3 class="box-title">Pesquisadores</h3>
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
    <style>
        .box-primary {
            max-height:480px;
            overflow-x:auto;
        }
    </style>
@stop