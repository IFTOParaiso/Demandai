@extends('adminlte::page')

@section('title', 'Demandaí')

@section('content_header')
@stop

@section('content')

    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-blue"><i class="fa fa-files-o"></i></span>

                <div class="info-box-content">
                    <span spass="info-box-text" style="font-size: larger">Editais</span>
                    <span class="info-box-number">90</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>

                <div class="info-box-content">
                    <span spass="info-box-text" style="font-size: larger">Pesquisadores</span>
                    <span class="info-box-number">41,410</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-university"></i></span>

                <div class="info-box-content">
                    <span spass="info-box-text" style="font-size: larger">Instituições</span>
                    <span class="info-box-number">760</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-search"></i></span>

                <div class="info-box-content">
                    <span spass="info-box-text" style="font-size: larger">Áreas de Pesquisa</span>
                    <span class="info-box-number">2,000</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>

    <div class="box box-primary">

        <div class="col-xs-6">

            <h3 class="title" style="color: green"><i class="fa fa-clipboard"></i> Editais abertos</h3>
            <div class="table-overflow" style="height: 800px">
                <table id="editais-abertos" class="table table-hover">
                    <tbody>
                    {{--@forelse($publishes as $publish)
                        <a class="card" href="{{url('detalhe-edital/show',$publish->id)}}">
                            @if($publish->date_closure >=  Carbon\Carbon::today())
                                <span><h4>{{$publish->title}}</h4></span>
                                <p class="text" style="color: black"><b>Descrição: </b>{{$publish->description}}</p>
                                <span class="text" style="color: black"><b>Encerramento de Inscrições:</b> {{date('d/m/Y', strtotime($publish->date_closure))}}</span>
                                <hr />
                            @endif
                        </a>
                    @empty
                        <b>Não há editais cadastrados até o momento!</b>
                    @endforelse--}}
                    </tbody>
                </table>
            </div>
        </div>


        {{--<div class="box-header col-lg-6">
            <i class="ion ion-clipboard"></i>

            <h3 class="box-title">Pesquisadores</h3>
            @if($tipouser == 1)
            <div class="box-tools pull-right">
                <a href="{{url('cadastrar-usuario/pesquisador')}}" type="button" class="btn btn-default pull-right"><i class="fa fa-user-plus"></i> Cadasrtar Pesquisador</a>
            </div>
            @endif
        </div>

        <div class="box-header col-lg-6">
            <i class="ion ion-clipboard"></i>

            <h3 class="box-title">Áreas de Interesse</h3>
            --}}{{--@if($tipouser == 1)--}}{{--
            --}}{{--<div class="box-tools pull-right">--}}{{--
            --}}{{--<a href="{{url('cadastrar-usuario/pesquisador')}}" type="button" class="btn btn-default pull-right"><i class="fa fa-user-plus"></i> Cadasrtar Pesquisador</a>--}}{{--
            --}}{{--</div>--}}{{--
            --}}{{--@endif--}}{{--
        </div>

        <div class="box-body col-lg-6">

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

        <div class="box-body col-lg-6">

            <ul class="todo-list">
                @forelse($areas as $area)
                    <li class="col-sm-12">
                        <a href="#" class="col-sm-12">
                            <span class="text">{{$area->name}}</span>
                        </a>
                    </li>
                @empty
                    Não há usuários
                @endforelse

            </ul>
        </div>--}}


    </div>

    <style>
        .box-primary {
            max-height: 530px;
            overflow-x: auto;
        }
    </style>
@stop