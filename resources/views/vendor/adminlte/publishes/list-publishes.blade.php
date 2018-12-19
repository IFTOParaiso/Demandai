@extends('adminlte::page')
@section('title', 'Demandaí')
@section('content_header')
    <section class="content-header">
        <h1>
            Lista de Editais
        </h1>
        @if($tipouser == 1 || $tipouser == 2)
        <a class="btn btn-sm fa fa-plus-circle pull-right" role="button"
           href="{{url('cadastrar-edital')}}"> Cadastrar Novo Edital</a>
        @endif
    </section>
@stop
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-6">
                <div class="box">
                    <div class="box-body">
                            <h4 class="title" style="color: green">Editais Abertos</h4>
                            <div class="table-overflow" style="height: 800px">
                                <table id="editais-abertos" class="table table-hover">
                                    <tbody>
                                    @forelse($publishes as $publish)
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
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-6">
                <div class="box">
                    <div class="box-body">
                            <h4 class="title" style="color: red">Editais Fechados</h4>
                        <div class="table-overflow" style="height: 800px">
                            {{--<table id="editais-fechados" class="table table-hover">--}}
                            <table id="editais-fechados" class="table table-striped table-bordered" style="width:100%">
                                <tbody>
                                @forelse($publishes as $publish)
                                    <a class="card" href="{{url('detalhe-edital/show',$publish->id)}}">
                                        @if($publish->date_closure < Carbon\Carbon::today())
                                            <span><h4>{{$publish->title}}</h4></span>
                                            <p class="text" style="color: black"><b>Descrição: </b>{{$publish->description}}</p>
                                            <span class="text" style="color: black"><b>Encerramento de Inscrições:</b> {{date('d/m/Y', strtotime($publish->date_closure))}}</span>
                                            <hr />
                                        @endif
                                    </a>
                                @empty
                                    <b>Não há editais cadastrados até o momento!</b>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <style>
     .table-overflow {
         max-height:400px;
         overflow-x:auto;
     }
 </style>
@stop