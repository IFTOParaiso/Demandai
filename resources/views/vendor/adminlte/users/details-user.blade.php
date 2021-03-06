@extends('adminlte::page')

@section('title', 'Demandaí')

@section('content_header')
    <section class="content-header">
        <h1>
            Detalhes do Usuário
        </h1>
    </section>
@stop

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">

                        @if(session('message'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <p>{{session('message')}}</p>
                            </div>
                        @endif

                        <div class="col-md-12">
                            <div class="box box-solid">
                                <div class="box-header with-border">
                                    <i class="fa fa-user-circle-o"></i>
                                    <h3 class="box-title">{{$user->name}}</h3>
                                    <a class="btn btn-sm fa fa-lock pull-right" role="button" style="color: blue"
                                       href="{{route('edit-password', $user->id)}}"> Alterar senha</a>
                                    <a class="btn btn-sm fa fa-edit pull-right" role="button" style="color: blue"
                                       href="{{url('editar-usuario/edit',$user->id)}}"> Editar</a>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body col-lg-6">
                                    <dl>
                                        <dt><i class="fa fa-sign-in"></i> Email:</dt>
                                        <dd>{{$user->email}}</dd>
                                    </dl>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .list-group-areas {
            max-height:200px;
            overflow-x:auto;
        }
    </style>
@stop