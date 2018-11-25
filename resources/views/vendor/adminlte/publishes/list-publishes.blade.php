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
                        <table id="usuarios-propi" class="table table-hover">
                            <thead>
                            <tr>
                                <th>Título</th>
                                <th>Descrição</th>
                                <th>Data de Encerramento</th>
                                <th>Situação</th>
                                <th>Link de Acesso</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($publishes as $publish)
                                <tr>
                                    <td>{{$publish->title}}</td>
                                    <td>{{$publish->description}}</td>
                                    <td>{{date('d/m/Y', strtotime($publish->date_closure))}}</td>
                                    @if($publish->date_closure >=  Carbon\Carbon::today())
                                        <td>
                                            <b class="text " style="color: green">Edital Aberto!</b>
                                        </td>
                                    @elseif($publish->date_closure <  Carbon\Carbon::today())
                                        <td>
                                            <b class="text " style="color: red">Edital Fechado!</b>
                                        </td>
                                    @endif
                                    <td>
                                        <a href="{{$publish->link}}">{{$publish->link}}</a>
                                    </td>
                                    <td><a class="fa fa-edit" style="color: blue" href="#"> Editar</a></td>
                                    <td><a class="fa fa-trash" style="color: red" href="#"> Excluir</a></td>
                                </tr>
                            @empty
                                <b>Não há editais cadastrados até o momento!</b>
                            @endforelse
                            </tbody>


                            {{--<div class="box-header">--}}
                                {{--<h3 class="box-title">Editais Abertos</h3>--}}
                            {{--</div>--}}
                            {{--<hr>--}}
                            {{--@foreach($publishes as $publish)--}}

                                {{--@if($publish->date_closure >=  Carbon\Carbon::today())--}}
                                    {{--{{$publish->title}}--}}
                                    {{--<hr>--}}
                                {{--@else--}}
                                {{--@endif--}}
                            {{--@endforeach--}}

                            {{--<br>--}}

                            {{--<div class="box-header">--}}
                                {{--<h3 class="box-title">Editais Fechados</h3>--}}
                            {{--</div>--}}
                            {{--<hr>--}}
                            {{--@foreach($publishes as $publish)--}}

                                {{--@if($publish->date_closure <  Carbon\Carbon::today())--}}
                                    {{--{{$publish->title}}--}}
                                    {{--<hr>--}}
                                {{--@else--}}
                                {{--@endif--}}
                            {{--@endforeach--}}

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop