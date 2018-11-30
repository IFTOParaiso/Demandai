@extends('adminlte::page')

@section('title', 'Demandaí')

@section('content_header')
    <section class="content-header">
        <h1>
            Lista de Editais
        </h1>
    </section>
@stop

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                            {{--<div class="title">--}}
                                {{--<h3>{{$publish->title}}</h3>--}}
                                {{--<h5>{{$publish->description}}</h5>--}}
                            {{--</div>--}}

                            {{--<div class="body">--}}
                                    {{--<b><h4>Data de Encerramento: </h4></b><p>{{date('d/m/Y', strtotime($publish->date_closure))}}</p>--}}
                                    {{--<span>--}}
                                        {{--<h4>--}}
                                            {{--@if($publish->date_closure >=  Carbon\Carbon::today())--}}
                                                {{--<b class="text " style="color: green">Edital Aberto!</b>--}}
                                            {{--@elseif($publish->date_closure < Carbon\Carbon::today())--}}
                                                {{--<b class="text " style="color: red">Edital Fechado!</b>--}}
                                            {{--@endif--}}
                                        {{--</h4>--}}
                                        {{--<a href="{{$publish->link}}" target="_blank">{{$publish->link}}</a>--}}
                                    {{--</span>--}}
                            {{--</div>--}}
                        <a class="fa fa-edit pull-right" style="color: blue" href="#"> Retificar</a>

                        <div class="col-md-6">
                            <div class="box box-solid">
                                <div class="box-header with-border">
                                    <i class="fa fa-file-o"></i>
                                    <h3 class="box-title">{{$publish->title}}</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
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
                                </div>
                            </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop