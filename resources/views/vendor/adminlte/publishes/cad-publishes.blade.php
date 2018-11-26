@extends('adminlte::page')

@section('title', 'Demandaí')

@section('content_header')
@stop

@section('content')
    <div class="col-md-12">
        <div class="container-fluid">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs" id="myTab">
                    {{--<li class="active"><a href="#tab_1" data-toggle="tab">Edital</a></li>--}}
                    <li class="active"><a href="#tab_1" data-toggle="tab">Edital</a></li>
                    <li><a href="#tab_2" data-toggle="tab">Áreas de Interesse</a></li>
                    <li><a href="#tab_3" data-toggle="tab">Lista de Trasmissão</a></li>
                    <li class="pull-right header"><i class="fa fa-file-o"></i> Cadastro de Edital</li>
                </ul>
                @if(isset($publish))
                    <form class="form-horizontal" method="post"
                          action="{{ url('editar-edital/update', $publish->id) }}">
                        {!! method_field('PUT') !!}
                        @else
                            <form action="{{route('cadastrar-edital')}}" method="post">
                                @endif
                                {!! csrf_field() !!}
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1">
                                        <div class="container-fluid">

                                            <div class="form-group has-feedback {{ $errors->has('title') ? 'has-error' : '' }}">
                                                <input type="text" name="title" class="form-control"
                                                       value="{{ old('title') }}"
                                                       placeholder="Título" required>
                                                <span class="fa fa-file form-control-feedback"></span>
                                                @if ($errors->has('title'))
                                                    <span class="help-block">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                                                @endif
                                            </div>
                                            <div class="form-group has-feedback {{ $errors->has('description') ? 'has-error' : '' }}">
                        <textarea type="text" name="description" class="form-control" value="{{ old('description') }}"
                                  placeholder="Descrição" required></textarea>
                                                <span class="fa fa-file-text form-control-feedback"></span>
                                                @if ($errors->has('description'))
                                                    <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                                                @endif
                                            </div>
                                            <div class="form-group has-feedback {{ $errors->has('date_closure') ? 'has-error' : '' }}">
                                                <input type="date" name="date_closure" class="form-control"
                                                       placeholder="Data de Encerramento"
                                                       required="Informe a data de encerramento !">
                                                <span class="fa fa-calendar form-control-feedback"></span>
                                                @if ($errors->has('date_closure'))
                                                    <span class="help-block">
                            <strong>{{ $errors->first('date_closure') }}</strong>
                        </span>
                                                @endif
                                            </div>
                                            <div class="form-group has-feedback {{ $errors->has('link') ? 'has-error' : '' }}">
                                                <input type="text" name="link" class="form-control"
                                                       placeholder="Link de Acesso" required>
                                                <span class="fa fa-link form-control-feedback"></span>
                                                @if ($errors->has('link'))
                                                    <span class="help-block">
                            <strong>{{ $errors->first('link') }}</strong>
                        </span>
                                                @endif
                                            </div>
                                            {{--<a href="#tab_2" data-toggle="tab" class="btn btn-success btn-flat ">Próxima Etapa</a>--}}
                                            <button href="#tab_2" data-toggle="tab" class="btn btn-success pull-right">
                                                Próxima Etapa
                                            </button>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="tab_2">
                                        <div class="container-fluid">

                                            <div class="form-group">
                                                <label for="">Grandes áreas</label>
                                                <div>
                                                    <select id="big-area" name="big-area" class="form-control">
                                                        @forelse($bigAreas as $b)
                                                            <option value="{{$b->id}}">{{$b->name}}</option>
                                                        @empty
                                                            Não há registro
                                                        @endforelse
                                                    </select>
                                                </div>
                                            </div>

                                            <div id="tabela-areas">


                                            </div>

                                         {{--   <table id="tabela-areas" class="table table-bordered table-hover">
                                                <thead>
                                                <tr>
                                                    <th>Áreas</th>
                                                </tr>
                                                </thead>


                                            </table>--}}
                                            <button href="#tab_1" data-toggle="tab" class="btn btn-danger pull-left">
                                                Voltar
                                            </button>
                                            <button href="#tab_3" data-toggle="tab" class="btn btn-success pull-right">
                                                Próxima Etapa
                                            </button>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="tab_3">
                                        <div class="container-fluid">
                                            <table id="usuarios-propi" class="table table-bordered table-hover">
                                                <thead>
                                                <tr>
                                                    <th>Pesquisadores</th>
                                                    <th>Email</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                {{--@forelse($users as $user)--}}
                                                {{--<tr>--}}
                                                {{--<td>{{$user->name}}</td>--}}
                                                {{--<td>{{$user->email}}</td>--}}
                                                {{--</tr>--}}
                                                {{--@empty--}}
                                                {{--Não há Grandes Áreas!--}}
                                                {{--@endforelse--}}
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th>Pesquisadores</th>
                                                    <th>Email</th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                            <button href="#tab_2" data-toggle="tab"
                                                    class="btn btn-danger btn-flat pull-left">Voltar
                                            </button>
                                            <button type="submit" class="btn btn-success pull-right">Enviar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
            </div>
        </div>
    </div>
@stop