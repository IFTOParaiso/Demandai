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
                                        <a class="btn btn-sm fa fa-edit pull-right" role="button" style="color: blue"
                                           href="{{url('editar-usuario/edit',$user->id)}}"> Editar</a>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body col-lg-6">
                                    <dl>
                                        <dt><i class="fa fa-sign-in"></i> Email:</dt>
                                        <dd>{{$user->email}}</dd>
                                    </dl>
                                    <dl>
                                        <dt><i class="fa fa-graduation-cap"></i> Formação</dt>
                                        @if($user->formation == '1')
                                        <dd>Graduado</dd>
                                        @elseif($user->formation == '2')
                                        <dd>Mestre</dd>
                                        @elseif($user->formation == '3')
                                        <dd>Doutor</dd>
                                        @endif
                                    </dl>
                                    <dl>
                                        @foreach($institutions as $institution)
                                            @if($institution->id == $user->institution_id)
                                        <dt><i class="fa fa-university"></i> Instituição</dt>
                                        <dd>{{$institution->name}}</dd>
                                            @endif
                                        @endforeach
                                    </dl>
                                    <dl>
                                        <dt>
                                        <dt><i class="fa fa-external-link"></i> Currículo Lattes</dt>
                                        <dd><a href="{{$user->lattes}}" target="_blank">{{$user->lattes}}</a></dd>
                                        </dt>
                                    </dl>
                                    <dl>
                                        <dt>Status</dt>
                                        @if($user->status == '1')
                                        <dd class="text" style="color: green;">Ativado</dd>
                                        @elseif($user->status == '0')
                                        <dd class="text" style="color: gray;">Desativado</dd>
                                        @endif
                                    </dl>
                                </div>

                                <div class="col-lg-6 pull-right" style="margin-top: 60px">
                                    <dt>Áreas relacionadas</dt>
                                    @forelse($areas as $area)
                                        {{$area->name}}<br>
                                    @empty
                                        <small>Não há áreas de interesse selecionadas até o momento!</small>
                                    @endforelse
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop