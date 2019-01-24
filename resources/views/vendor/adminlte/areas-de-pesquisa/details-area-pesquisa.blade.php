@extends('adminlte::page')

@section('title', 'Demandaí')

@section('content_header')
    <section class="content-header">
        <h1>
            Detalhes da Área de Pesquisa
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
                                    @foreach($bigAreas as $bigArea)
                                        @if($area->big_area_id == $bigArea->id)
                                            {{--<i class="fa fa-search"> {{$bigArea->name}}</i> <br>--}}
                                            <h3 class="box-title">{{$bigArea->name}}</h3>
                                        @endif
                                    @endforeach
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="col-lg-6">
                                        <dl>
                                            <dt><i class="fa fa-info"></i> Área</dt>
                                            <dd>{{$area->name}}</dd>
                                        </dl>
                                        {{--<dl>--}}
                                            {{--<dt><i class="fa fa-mail-forward"></i> Email</dt>--}}
                                            {{--<dd>{{$institution->email}}</dd>--}}
                                        {{--</dl>--}}
                                        {{--<dl>--}}
                                            {{--<dt><i class="fa fa-phone"></i> Telefone</dt>--}}
                                            {{--<dd>{{$institution->phone}}</dd>--}}
                                        {{--</dl>--}}
                                        {{--<dl>--}}
                                            {{--<dt>Site</dt>--}}
                                            {{--<dd><a href="{{$institution->site}}" target="_blank">{{$institution->site}}</a></dd>--}}
                                        {{--</dl>--}}

                                    </div>

                                    <div class="col-lg-6">
                                        <dt><i class="fa fa-address-book"></i> Pesquisadores</dt>
                                        <dl class="text">
                                            @forelse($researchers as $researcher)
                                            <dd>{{$researcher->name}}</dd>
                                            {{--<dd>{{$user->number}}</dd>--}}
                                            {{--<dd>{{$user->sector}}</dd>--}}
                                            {{--<dd>{{$user->city}}</dd>--}}
                                            @empty
                                                Não há registros

                                            @endforelse
                                        </dl>
                                    </div>

                                    <div id="pesquisadores-interessados"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .text {
            max-height:250px;
            overflow-x:auto;
        }
    </style>
@stop
