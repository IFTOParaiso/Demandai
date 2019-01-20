@extends('adminlte::page')
@section('title', 'Demandaí')
@section('content_header')
    <section class="content-header">
        <div>
            @if($tipouser == 1 || $tipouser == 2)
                <a class="btn btn-success"
                   href="{{url('cadastrar-edital')}}"> Cadastrar novo edital</a>
            @endif
        </div>

    </section>
@stop
@section('content')
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3><i class="fa fa-file"></i> Editais</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>

            <!-- /.box-header -->
            <div class="box-body">

                <table id="tabela-editais" class="table table-hover">
                    <thead>
                    <th>COD</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th>Encerramento de inscrições</th>

                    </thead>
                    <tbody>
                    @forelse($publishes as $publish)
                        <tr>
                            <td>{{$publish->id}}</td>
                            <td>  <a class="card" href="{{url('detalhe-edital/show',$publish->id)}}">{{$publish->title}}</a></td>
                            <td>{{$publish->description}}</td>
                            <td>
                                @if($publish->date_closure >=  Carbon\Carbon::today())
                                    <span class="label label-success">Aberto</span>
                                @elseif($publish->date_closure < Carbon\Carbon::today())
                                    <span class="label label-danger">Encerrado</span>
                                @endif
                            </td>
                            <td>{{date('d/m/Y', strtotime($publish->date_closure))}}</td>

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