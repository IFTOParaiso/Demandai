@extends('adminlte::page')

@section('title', 'Demandaí')

@section('content_header')
    <section class="content-header">
        <h1>
            Lista de Usuários
        </h1>
    </section>
@stop

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Editais</h3>
                    </div>
                    <div class="box-body">
                        <table id="usuarios-propi" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Título</th>
                                <th>Descrição</th>
                                <th>Data de Encerramento</th>
                                <th>Link de Acesso</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($publishes as $publish)
                                <tr>
                                    <td>{{$publish->title}}</td>
                                    <td>{{$publish->description}}</td>
                                    <td>{{date('d/m/Y', strtotime($publish->date_closure))}}</td>
                                    <td>{{$publish->link}}</td>
                                </tr>
                            @empty
                                Não há usuários
                            @endforelse
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Título</th>
                                <th>Descrição</th>
                                <th>Data de Encerramento</th>
                                <th>Link de Acesso</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop