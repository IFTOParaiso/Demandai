@extends('adminlte::page')

@section('title', 'Demandaí')

@section('content_header')
@stop

@section('content')
    <div class="container-fluid">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#tab_1" data-toggle="tab">Edital</a></li>
                <li><a href="#tab_2" data-toggle="tab">Áreas</a></li>
                <li><a href="#tab_3" data-toggle="tab">Lista de Trasmissão</a></li>
                <li class="pull-right header"><i class="fa fa-file-o"></i> Cadastro de Edital</li>
            </ul>
            @if(isset($publish))
                <form action="{{route('editar-edital',$publish->id)}}" method="post">
                    {!! csrf_field('PUT') !!}
                    @endif
                    {!! csrf_field() !!}
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <div class="container-fluid">

                                <div class="form-group has-feedback {{ $errors->has('title') ? 'has-error' : '' }}">
                                    <input type="text" name="title" class="form-control"
                                           value="{{$publish->title}}"
                                           placeholder="Título" required>
                                    <span class="fa fa-file form-control-feedback"></span>
                                    @if ($errors->has('title'))
                                        <span class="help-block">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                                    @endif
                                </div>
                                <div class="form-group has-feedback {{ $errors->has('description') ? 'has-error' : '' }}">
                        <textarea type="text" name="description" class="form-control"
                                  placeholder="Descrição" style="height: 100px"
                                  required>{{$publish->description}}</textarea>
                                    <span class="fa fa-file-text form-control-feedback"></span>
                                    @if ($errors->has('description'))
                                        <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                                    @endif
                                </div>
                                <div class="form-group has-feedback {{ $errors->has('date_closure') ? 'has-error' : '' }}">
                                    <input type="text" name="date_closure" class="form-control textbox-n"
                                           placeholder="Data de Encerramento"
                                           value="Data de Encerramento: {{date('d/m/Y', strtotime($publish->date_closure))}}"
                                           onfocus="(this.type='date')"
                                           required>
                                    <span class="fa fa-calendar form-control-feedback"></span>
                                    @if ($errors->has('date_closure'))
                                        <span class="help-block">
                            <strong>{{ $errors->first('date_closure') }}</strong>
                        </span>
                                    @endif
                                </div>
                                <div class="form-group has-feedback {{ $errors->has('link') ? 'has-error' : '' }}">
                                    <input type="text" name="link" class="form-control"
                                           placeholder="Link de Acesso" value="{{$publish->link}}" required>
                                    <span class="fa fa-link form-control-feedback"></span>
                                    @if ($errors->has('link'))
                                        <span class="help-block">
                            <strong>{{ $errors->first('link') }}</strong>
                        </span>
                                    @endif
                                </div>

                                <a class="btn btn-success btnNext pull-right">Próxima Etapa</a>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab_2">
                            <div class="container-fluid">

                                <div class="form-group">
                                    <label for="">Áreas</label>
                                    <div>
                                        <table>
                                            <tbody>
                                            @forelse($areas as $a)
                                            <tr>
                                                <td>
                                                    {{$a->name}}
                                                </td>
                                            </tr>
                                            @empty
                                                Não há registro
                                            @endforelse
                                            </tbody>
                                        </table>




                                    </div>
                                </div>

                                <div id="tabela-areas">


                                </div>

                                <a class="btn btn-danger btnPrevious">Anterior</a>
                                <button type="button" class="btn btn-success btnNext pull-right"
                                        onclick="pesquisadoresIteressados()">Próxima Etapa
                                </button>

                            </div>
                        </div>

                        <div class="tab-pane" id="tab_3">
                            <div class="container-fluid">

                                <div id="pesquisadores-interessados"></div>

                                <a class="btn btn-danger btnPrevious">Anterior</a>
                                <button type="submit" class="btn btn-success pull-right">Enviar</button>
                            </div>
                        </div>
                    </div>
                </form>
        </div>
    </div>
@stop