@extends('adminlte::page')

@section('title', 'Demandaí')

@section('content_header')
@stop

@section('content')
<div class="col-md-12">
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            {{--<li class="active"><a href="#tab_1-1" data-toggle="tab">Edital</a></li>--}}
            <li class="active"><a href="#tab_1-1" data-toggle="tab">Edital</a></li>
            <li><a href="#tab_2-2" data-toggle="tab">Áreas de Interesse</a></li>
            <li><a href="#tab_3-2" data-toggle="tab">Lista de Trasmissão</a></li>
            <li class="pull-right header"><i class="fa fa-file-o"></i> Cadastro de Edital</li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab_1-1">
                <div class="container-fluid">
                <form action="{{route('cadastrar-edital')}}" method="post">
                    {!! csrf_field() !!}

                    <div class="form-group has-feedback {{ $errors->has('title') ? 'has-error' : '' }}">
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}"
                               placeholder="Título">
                        <span class="fa fa-file form-control-feedback"></span>
                        @if ($errors->has('title'))
                            <span class="help-block">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback {{ $errors->has('description') ? 'has-error' : '' }}">
                        <textarea type="text" name="description" class="form-control" value="{{ old('description') }}"
                                  placeholder="Descrição"></textarea>
                        <span class="fa fa-file-text form-control-feedback"></span>
                        @if ($errors->has('description'))
                            <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback {{ $errors->has('date_closure') ? 'has-error' : '' }}">
                        <input type="date" name="date_closure" class="form-control"
                               placeholder="Data de Encerramento">
                        <span class="fa fa-calendar form-control-feedback"></span>
                        @if ($errors->has('date_closure'))
                            <span class="help-block">
                            <strong>{{ $errors->first('date_closure') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback {{ $errors->has('link') ? 'has-error' : '' }}">
                        <input type="text" name="link" class="form-control"
                               placeholder="Link de Acesso">
                        <span class="fa fa-link form-control-feedback"></span>
                        @if ($errors->has('link'))
                            <span class="help-block">
                            <strong>{{ $errors->first('link') }}</strong>
                        </span>
                        @endif
                    </div>
                        {{--<a href="#tab_2-2" data-toggle="tab" class="btn btn-success btn-flat ">Próxima Etapa</a>--}}
                        <button href="#tab_2-2" data-toggle="tab" class="btn btn-success pull-right">Próxima Etapa</button>
                </form>
                </div>
            </div>

            <div class="tab-pane" id="tab_2-2">
                <div class="container-fluid">
                <table id="usuarios-propi" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Grandes Áreas</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{--@forelse($big_areas as $ba)--}}
                        {{--<tr>--}}
                            {{--<td>{{$ba->name}}</td>--}}
                            {{--<td>{{$ba->status}}</td>--}}
                        {{--</tr>--}}
                    {{--@empty--}}
                        {{--Não há Grandes Áreas!--}}
                    {{--@endforelse--}}
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Grandes Áreas</th>
                        <th>Status</th>
                    </tr>
                    </tfoot>
                </table>
                <button href="#tab_1-1" data-toggle="tab" class="btn btn-danger btn-flat pull-left">Voltar</button>
                <button href="#tab_3-2" data-toggle="tab" class="btn btn-success btn-flat pull-right">Próxima Etapa</button>
                </div>
            </div>

            <div class="tab-pane" id="tab_3-2">
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
                <button href="#tab_2-2" data-toggle="tab" class="btn btn-danger btn-flat pull-left">Voltar</button>
                <button type="submit" class="btn btn-success btn-flat pull-right">Enviar</button>
            </div>
            </div>
        </div>
    </div>
</div>
@stop