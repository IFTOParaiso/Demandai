@extends('adminlte::page')

@section('title', 'Demandaí')

@section('content_header')
    <section class="content-header">
        <h1>
            Detalhes do Edital
        </h1>
    </section>
@stop

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">

                        <div class="col-md-12">
                            <div class="box box-solid">
                                <div class="box-header with-border">
                                    <i class="fa fa-file-o"></i>
                                    <h3 class="box-title">{{$publish->title}}</h3>
                                    @if ($tipouser=='Administrador')
                                        <a class="btn btn-sm fa fa-edit pull-right" role="button" style="color: blue"
                                           href="{{url('editar-edital/edit',$publish->id)}}"> Retificar</a>
                                    @endif
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="col-lg-6">
                                        <dl>
                                            <dt><i class="fa fa-info"></i> Descrição</dt>
                                            <dd>{{$publish->description}}</dd>
                                        </dl>
                                        <dl>
                                            <dt><i class="fa fa-calendar"></i> Data de Encerramento</dt>
                                            <dd>{{date('d/m/Y', strtotime($publish->date_closure))}}</dd>
                                        </dl>
                                        <dl>
                                            <dt>
                                                @if($publish->date_closure >=  Carbon\Carbon::today())
                                                    <b class="text " style="color: green">Edital Aberto!</b>
                                                @elseif($publish->date_closure < Carbon\Carbon::today())
                                                    <b class="text " style="color: red">Edital Fechado!</b>
                                                @endif
                                            </dt>
                                        </dl>
                                        <dl>
                                            <dt>Link de Acesso</dt>
                                            <dd><a href="{{$publish->link}}" target="_blank">{{$publish->link}}</a></dd>
                                        </dl>
                                        <dl>
                                            <dt>Áreas relacionadas</dt>
                                            @foreach($areas as $area)
                                                {{$area->name}}<br>
                                            @endforeach
                                        </dl>
                                    </div>

                                    <div class="col-lg-6">
                                        @if ($tipouser=='Pesquisador')
                                            <button class="btn btn-sm fa fa-thumbs-o-up pull-right" style="color: green"
                                                    href=""> Tenho Interesse
                                            </button>
                                            <button class="btn btn-sm fa fa-thumbs-o-down pull-right "
                                                    style="color: red"
                                                    href=""> Não Tenho Interesse
                                            </button>
                                        @endif
                                        @if ($tipouser=='Administrador')
                                            <dt class="text-right" style="font-size: large"
                                                data-toggle="tooltip" data-placement="top"
                                                title="Pessoas que visualizaram este edital">
                                                <i class="fa fa-eye"></i> : 10
                                            </dt>
                                            <dt class="text-right" style="font-size: large"
                                                data-toggle="tooltip" data-placement="top"
                                                title="Pessoas que demonstraram interesse neste edital">
                                                <i class="fa fa-thumbs-o-up"></i> : 1
                                            </dt>
                                            <dt class="text-right" style="font-size: large"
                                                data-toggle="tooltip" data-placement="top"
                                                title="Pessoas que demonstraram desinteresse neste edital">
                                                <i class="fa fa-thumbs-o-down"></i> : 1
                                            </dt>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
