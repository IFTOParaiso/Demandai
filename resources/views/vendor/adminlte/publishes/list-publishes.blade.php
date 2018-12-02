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
                            {{--<tbody>--}}
                            {{--@forelse($publishes as $publish)--}}
                                {{--<a class="card" href="{{url('detalhe-edital/show',$publish->id)}}">--}}

                                        {{--<span><h3>{{$publish->title}}</h3></span>--}}
                                        {{--<p class="text" style="color: black">{{$publish->description}}</p>--}}
                                        {{--<span class="text" style="color: black">{{date('d/m/Y', strtotime($publish->date_closure))}}</span>--}}
                                        {{--<span>--}}
                                            {{--@if($publish->date_closure >=  Carbon\Carbon::today())--}}
                                                {{--<br>--}}
                                                {{--<b class="text " style="color: green">Edital Aberto!</b>--}}
                                            {{--@elseif($publish->date_closure < Carbon\Carbon::today())--}}
                                                {{--<br>--}}
                                                {{--<b class="text " style="color: red">Edital Fechado!</b>--}}
                                            {{--@endif--}}
                                        {{--</span>--}}
                                {{--</a>--}}

                            {{--@empty--}}
                                {{--<b>Não há editais cadastrados até o momento!</b>--}}
                            {{--@endforelse--}}
                            {{--</tbody>--}}

                            <h3 class="title" style="color: green">Editais Abertos</h3>
                            <tbody>
                            @forelse($publishes as $publish)
                                <a class="card" href="{{url('detalhe-edital/show',$publish->id)}}">
                                    @if($publish->date_closure >=  Carbon\Carbon::today())
                                    <span><h3>{{$publish->title}}</h3></span>
                                    <p class="text" style="color: black">{{$publish->description}}</p>
                                    <span class="text" style="color: black">Encerramento de Inscrições: {{date('d/m/Y', strtotime($publish->date_closure))}}</span>
                                    @endif
                                </a>
                            @empty
                                <b>Não há editais cadastrados até o momento!</b>
                            @endforelse
                            </tbody>
                            <h3 class="title" style="color: red">Editais Fechados</h3>
                            <tbody>
                            @forelse($publishes as $publish)
                                <a class="card" href="{{url('detalhe-edital/show',$publish->id)}}">
                                    @if($publish->date_closure < Carbon\Carbon::today())
                                    <span><h3>{{$publish->title}}</h3></span>
                                    <p class="text" style="color: black"> {{$publish->description}}</p>
                                    <span class="text" style="color: black">Encerramento de Inscrições: {{date('d/m/Y', strtotime($publish->date_closure))}}</span>
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
    </section>

@stop