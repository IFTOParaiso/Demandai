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
                                    <i class="fa fa-university"></i>
                                    <h3 class="box-title">{{$institution->name}}</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="col-lg-6">
                                        <dl>
                                            <dt><i class="fa fa-info"></i> Descrição</dt>
                                            <dd>{{$institution->description}}</dd>
                                        </dl>
                                        <dl>
                                            <dt><i class="fa fa-mail-forward"></i> Email</dt>
                                            <dd>{{$institution->email}}</dd>
                                        </dl>
                                        <dl>
                                            <dt><i class="fa fa-phone"></i> Telefone</dt>
                                            <dd>{{$institution->phone}}</dd>
                                        </dl>
                                        <dl>
                                            <dt>Site</dt>
                                            <dd><a href="{{$institution->site}}" target="_blank">{{$institution->site}}</a></dd>
                                        </dl>

                                    </div>

                                    <div class="col-lg-6">
                                        <dl>
                                            <dt><i class="fa fa-address-book"></i> Endereço</dt>
                                            <dd>{{$institution->street}}</dd>
                                            <dd>{{$institution->number}}</dd>
                                            <dd>{{$institution->sector}}</dd>
                                            <dd>{{$institution->city}}</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
