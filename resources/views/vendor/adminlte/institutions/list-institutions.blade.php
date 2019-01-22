@extends('adminlte::page')
@section('title', 'Demandaí')
@section('content_header')
    {{--<section class="content-header">--}}
        {{--<div>--}}
            {{--@if($tipouser == 1 || $tipouser == 2)--}}
                {{--<a class="btn btn-success"--}}
                   {{--href="{{url('cadastrar-edital')}}"> Cadastrar novo edital</a>--}}
            {{--@endif--}}
        {{--</div>--}}

    {{--</section>--}}
@stop
@section('content')
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3><i class="fa fa-university"></i> Instituições</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>

            <!-- /.box-header -->
            <div class="box-body">

                <table id="tabela-editais" class="table table-hover">
                    <thead>
                    <th>Nome</th>
                    <th>Descrição</th>
                    {{--<th>Status</th>--}}
                    {{--<th>Encerramento de inscrições</th>--}}

                    </thead>
                    <tbody>
                    @forelse($institutions as $institution)
                        <tr>
                            <td>  <a class="card" href="{{url('detalhes-instituicoes/show',$institution->id)}}">{{$institution->name}}</a></td>
                            <td>{{$institution->description}}</td>
                        </tr>
                    @empty
                        Não há registros

                    @endforelse
                    </tbody>
                </table>
                <!-- /.table-responsive -->
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