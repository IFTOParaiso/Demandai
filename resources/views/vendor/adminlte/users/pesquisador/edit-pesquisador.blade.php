@extends('adminlte::page')

@section('title', 'Demandaí')

@section('content_header')
@stop

@section('content')
    <div class="container-fluid">
        <div class="register-box-body">
            <p class="login-box-msg">{{ trans('adminlte::adminlte.register_message') }}</p>

            @if(session('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <p>{{session('message')}}</p>
                </div>
            @endif

            <div class="container-fluid">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs" id="myTab">
                        <li class="active"><a href="#tab_1" data-toggle="tab" style="pointer-events: none">Dados do Usuário</a></li>
                        {{--@if($tipo_usuario <> 'propi')--}}
                        <li><a href="#tab_2" data-toggle="tab" style="pointer-events: none">Áreas de Interesse</a></li>
                        {{--@endif--}}
                        <li class="pull-right header"><i class="fa fa-file-o"></i> Cadastro de Usuário</li>
                    </ul>
                    @if(isset($user))
                        <form class="form-horizontal" method="post"
                              action="{{ url('editar-usuario/update', $user->id) }}">
                            {!! method_field('PUT') !!}
                            @endif
                            {!! csrf_field() !!}
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1">
                                    <div class="container-fluid">

                                        <input type="hidden" name="status" value="1">
                                        <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
                                            <input type="text" name="name" id="name" class="form-control"
                                                   value="{{ $user->name }}"
                                                   placeholder="{{ trans('adminlte::adminlte.full_name') }}" required>
                                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                            @endif
                                        </div>
                                        <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                                            <input type="email" name="email" id="email" class="form-control"
                                                   value="{{ $user->email }}"
                                                   placeholder="{{ trans('adminlte::adminlte.email') }}" required>
                                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                            @endif
                                        </div>
                                        <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                                            <input type="password" name="password" id="password" class="form-control"
                                                   value="{{ $user->password }}"
                                                   placeholder="{{ trans('adminlte::adminlte.password') }}" required disabled
                                            >
                                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                            @endif
                                            <a class="btn btn-sm fa fa-lock pull-right" role="button" style="color: blue"
                                               href="{{route('edit-password', $user->id)}}"> Alterar senha</a>
                                        </div>

                                        {{--<div class="form-group has-feedback {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                                            <input type="password" name="password_confirmation" id="password_confirmation"
                                                   class="form-control"
                                                   value="{{ $user->password }}" placeholder="{{ trans('adminlte::adminlte.retype_password') }}" required>
                                            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                                            @if ($errors->has('password_confirmation'))
                                                <span class="help-block">
                                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                        </span>
                                            @endif
                                        </div>--}}

                                        {{--@if($tipo_usuario <> 'propi')--}}
                                        <div class="form-group has-feedback {{ $errors->has('lattes') ? 'has-error' : '' }}">
                                            <input type="text" name="lattes" id="lattes" class="form-control"
                                                   value="{{ $user->lattes }}"
                                                   placeholder="Lattes" required>
                                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                            @if ($errors->has('lattes'))
                                                <span class="help-block">
                                                                <strong>{{ $errors->first('lattes') }}</strong>
                                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="">Formação</label>
                                            <div>
                                                <select id="formation" name="formation" class="form-control" required>
                                                    <option value="1">Graduado</option>
                                                    <option value="2">Mestre</option>
                                                    <option value="3">Doutor</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Instituição</label>
                                            <div>
                                                <select id="institution_id" name="institution_id" required
                                                        class="form-control">
                                                    @forelse($institutions as $institution)
                                                        <option value="{{$institution->id}}">{{$institution->name}}</option>
                                                    @empty
                                                        Não há instituições
                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>
                                        @if($tipouser == '1' || $tipouser == '2')
                                        <div class="form-group">
                                            <label for="">Status do Usuário</label>
                                            <div>
                                                <select id="status" name="status" class="form-control">
                                                    <option value="1">Ativado</option>
                                                    <option value="0">Desativado</option>
                                                </select>
                                            </div>
                                        </div>
                                        @endif
                                        <a class="btn btn-success btnNext-researcher pull-right">Próximo Etapa</a>
                                        {{--@endif--}}
                                        {{--@if($tipo_usuario == 'propi')--}}
                                        {{--<input type="hidden" id="tipousuario" name="tipousuario[]" value="2">--}}
                                        {{--@endif--}}
                                        {{--@if($tipo_usuario == 'pesquisador')--}}
                                        <input type="hidden" id="tipousuario" name="tipousuario[]" value="3">
                                        {{--@endif--}}
                                        {{--@if($tipo_usuario <> 'pesquisador')--}}
                                        {{--<button type="submit" class="btn btn-success pull-right">Enviar</button>--}}
                                        {{--@endif--}}
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_2">
                                    <div class="container-fluid">
                                        <div class="form-group" id="areas-usuario">
                                            <div>
                                                <table id="tabela-areas-usuario" class="table table-bordered table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>Áreas</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse($areas as $a)
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" name="areas[]" value="{{$a->id}}" checked style="display: none">{{$a->name}}
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        Não há registro
                                                    @endforelse
                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>


                                        <div class="form-group" id="update-areas" style="display: none">
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


                                        <div id="alterar">
                                            Deseja alterar as áreas?
                                            <a href="#" type="button"
                                               onclick="updateAreas()">Alterar
                                            </a>
                                        </div>

                                        <a class="btn btn-danger btnPrevious">Anterior</a>
                                        <button type="submit" class="btn btn-success enviar pull-right">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
@stop