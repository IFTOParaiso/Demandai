@extends('adminlte::page')

@section('title', 'Demandaí')

@section('content_header')
    <section class="content-header">
        {{--<div>--}}
            {{--<a class="btn btn-success"--}}
               {{--href="{{url('cadastrar-usuario','pesquisador')}}"> Cadastrar novo Pesquisador</a>--}}
        {{--</div>--}}

    </section>
@stop

@section('content')
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3><i class="fa fa-book"></i> Pesquisadores</h3>
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
                    <th>E-mail</th>
                    <th>Lattes</th>
                    </thead>
                    <tbody>
                    @forelse($researchers as $researcher)
                        <tr>
                            <td>
                                <a href="{{url('detalhe-pesquisador/show',$researcher->id)}}" class="col-sm-12"><span
                                            class="text">{{$researcher->name}}</span></a>
                            </td>
                            <td>
                                <span class="text">{{$researcher->email}}</span>
                            </td>
                            <td>
                               <a href="{{$researcher->lattes}}" target="_blank"><span class="text">{{$researcher->lattes}}</span></a>
                            </td>
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
            max-height: 400px;
            overflow-x: auto;
        }
    </style>
@stop
