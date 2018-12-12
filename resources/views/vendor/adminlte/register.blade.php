@extends('adminlte::master')

@section('adminlte_css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/auth.css') }}">
    @yield('css')
@stop

@section('body_class', 'register-page')

@section('body')
    <div class="container">
        <div class="register-logo">
            <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}">{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</a>
        </div>

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
                        <li class="active"><a href="#tab_1" data-toggle="tab">Dados do Usuário</a></li>
                        @if($tipo_usuario <> 'propi')
                        <li><a href="#tab_2" data-toggle="tab">Áreas de Interesse</a></li>
                        @endif
                        <li class="pull-right header"><i class="fa fa-file-o"></i> Cadastro de Usuário</li>
                    </ul>
                    @if(isset($user))
                        <form class="form-horizontal" method="post"
                              action="{{ url('registrar-pesquisador/update', $user->id) }}">
                            {!! method_field('PUT') !!}
                            @else
                                <form action="{{route('registrar-pesquisador')}}" method="post">
                                    @endif
                                    {!! csrf_field() !!}
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1">
                                            <div class="container-fluid">

                                                <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
                                                    <input type="text" name="name" class="form-control"
                                                           value="{{ old('name') }}"
                                                           placeholder="{{ trans('adminlte::adminlte.full_name') }}" required>
                                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                    @if ($errors->has('name'))
                                                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                                                    <input type="email" name="email" id="email" onblur="validacaoEmail()"
                                                           class="form-control" value="{{ old('email') }}"
                                                           placeholder="{{ trans('adminlte::adminlte.email') }}">
                                                    <div id="msgemail"></div>
                                                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                                                    <input type="password" name="password" id="password" class="form-control"
                                                           placeholder="{{ trans('adminlte::adminlte.password') }}">
                                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                                                    <input type="password" name="password_confirmation" id="password_confirmation" onblur="validarsenha()"
                                                           class="form-control"
                                                           placeholder="{{ trans('adminlte::adminlte.retype_password') }}">
                                                    <div id="msgsenha"></div>
                                                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                                                    @if ($errors->has('password_confirmation'))
                                                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                                                    @endif
                                                </div>

                                                @if($tipo_usuario <> 'propi')

                                                    <div class="form-group has-feedback {{ $errors->has('lattes') ? 'has-error' : '' }}">
                                                        <input type="text" name="lattes" class="form-control"
                                                               value="{{ old('lattes') }}"
                                                               placeholder="Lattes">
                                                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                        @if ($errors->has('lattes'))
                                                            <span class="help-block">
                            <strong>{{ $errors->first('lattes') }}</strong>
                        </span>
                                                        @endif
                                                    </div>

                                                    <!-- Select Basic -->
                                                    <div class="form-group">
                                                        <label for="">Formação</label>
                                                        <div>
                                                            <select id="formation" name="formation"
                                                                    class="form-control">
                                                                <option value="1">Graduado</option>
                                                                <option value="2">Mestre</option>
                                                                <option value="3">Doutor</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!-- Select Basic -->
                                                    <div class="form-group">
                                                        <label for="">Instituição</label>
                                                        <div>
                                                            <select id="institution_id" name="institution_id"
                                                                    class="form-control">
                                                                @forelse($institutions as $institution)
                                                                    <option value="{{$institution->id}}">{{$institution->name}}</option>
                                                                @empty
                                                                    Não há instituições
                                                                @endforelse
                                                            </select>
                                                        </div>
                                                    </div>

                                                    {{--<div class="form-group">--}}
                                                        {{--<label for="">Status do Usuário</label>--}}
                                                        {{--<div>--}}
                                                            {{--<select id="status" name="status" class="form-control">--}}
                                                                {{--<option value="1">Ativado</option>--}}
                                                                {{--<option value="0">Desativado</option>--}}
                                                            {{--</select>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                <input type="hidden" name="status" id="status" value="1">

                                                    <a class="btn btn-success btnNext pull-right">Próximo Etapa</a>
                                                @endif

                                                @if($tipo_usuario == 'propi')
                                                    <input type="hidden" id="tipousuario" name="tipousuario[]"
                                                           value="2">
                                                @endif

                                                @if($tipo_usuario == 'pesquisador')
                                                    <input type="hidden" id="tipousuario" name="tipousuario[]"
                                                           value="3">
                                                @endif
                                                @if($tipo_usuario <> 'pesquisador')
                                                    <button type="submit" class="btn btn-success pull-right">Enviar</button>
                                                @endif
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

                                                <a class="btn btn-danger btnPrevious">Anterior</a>
                                                <button type="submit" class="btn btn-success pull-right">Enviar</button>

                                            </div>
                                        </div>
                                    </div>
                </div>
                </form>
            </div>

            {{--<form action="{{route('registrar-pesquisador')}}" method="post">--}}
                {{--{!! csrf_field() !!}--}}

                {{--<div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">--}}
                    {{--<input type="text" name="name" class="form-control" value="{{ old('name') }}"--}}
                           {{--placeholder="{{ trans('adminlte::adminlte.full_name') }}">--}}
                    {{--<span class="glyphicon glyphicon-user form-control-feedback"></span>--}}
                    {{--@if ($errors->has('name'))--}}
                        {{--<span class="help-block">--}}
                            {{--<strong>{{ $errors->first('name') }}</strong>--}}
                        {{--</span>--}}
                    {{--@endif--}}
                {{--</div>--}}
                {{--<div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">--}}
                    {{--<input type="email" name="email" class="form-control" value="{{ old('email') }}"--}}
                           {{--placeholder="{{ trans('adminlte::adminlte.email') }}">--}}
                    {{--<span class="glyphicon glyphicon-envelope form-control-feedback"></span>--}}
                    {{--@if ($errors->has('email'))--}}
                        {{--<span class="help-block">--}}
                            {{--<strong>{{ $errors->first('email') }}</strong>--}}
                        {{--</span>--}}
                    {{--@endif--}}
                {{--</div>--}}
                {{--<div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">--}}
                    {{--<input type="password" name="password" class="form-control"--}}
                           {{--placeholder="{{ trans('adminlte::adminlte.password') }}">--}}
                    {{--<span class="glyphicon glyphicon-lock form-control-feedback"></span>--}}
                    {{--@if ($errors->has('password'))--}}
                        {{--<span class="help-block">--}}
                            {{--<strong>{{ $errors->first('password') }}</strong>--}}
                        {{--</span>--}}
                    {{--@endif--}}
                {{--</div>--}}
                {{--<div class="form-group has-feedback {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">--}}
                    {{--<input type="password" name="password_confirmation" class="form-control"--}}
                           {{--placeholder="{{ trans('adminlte::adminlte.retype_password') }}">--}}
                    {{--<span class="glyphicon glyphicon-log-in form-control-feedback"></span>--}}
                    {{--@if ($errors->has('password_confirmation'))--}}
                        {{--<span class="help-block">--}}
                            {{--<strong>{{ $errors->first('password_confirmation') }}</strong>--}}
                        {{--</span>--}}
                    {{--@endif--}}
                {{--</div>--}}

                {{--@if($tipo_usuario <> 'propi')--}}

                    {{--<div class="form-group has-feedback {{ $errors->has('lattes') ? 'has-error' : '' }}">--}}
                        {{--<input type="text" name="lattes" class="form-control" value="{{ old('lattes') }}"--}}
                               {{--placeholder="Lattes">--}}
                        {{--<span class="glyphicon glyphicon-user form-control-feedback"></span>--}}
                        {{--@if ($errors->has('lattes'))--}}
                            {{--<span class="help-block">--}}
                            {{--<strong>{{ $errors->first('lattes') }}</strong>--}}
                        {{--</span>--}}
                        {{--@endif--}}
                    {{--</div>--}}

                    {{--<!-- Select Basic -->--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="">Formação</label>--}}
                        {{--<div>--}}
                            {{--<select id="formation" name="formation" class="form-control">--}}
                                {{--<option value="1">Graduado</option>--}}
                                {{--<option value="2">Mestre</option>--}}
                                {{--<option value="3">Doutor</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<!-- Select Basic -->--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="">Instituição</label>--}}
                        {{--<div>--}}
                            {{--<select id="institution_id" name="institution_id" class="form-control">--}}
                                {{--@forelse($institutions as $institution)--}}
                                    {{--<option value="{{$institution->id}}">{{$institution->name}}</option>--}}
                                {{--@empty--}}
                                    {{--Não há instituições--}}
                                {{--@endforelse--}}
                            {{--</select>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endif--}}

                {{--@if($tipo_usuario == 'propi')--}}
                    {{--<input type="hidden" id="tipousuario" name="tipousuario[]" value="2">--}}
                {{--@endif--}}

                {{--@if($tipo_usuario == 'pesquisador')--}}
                    {{--<input type="hidden" id="tipousuario" name="tipousuario[]" value="3">--}}
                {{--@endif--}}

                {{--<input type="hidden" id="status" name="status" value="1">--}}


                {{--<button type="submit"--}}
                        {{--class="btn btn-primary btn-block btn-flat"--}}
                {{-->{{ trans('adminlte::adminlte.register') }}</button>--}}
            {{--</form>--}}


            <div class="auth-links">
                <a href="{{ url('/') }}"
                   class="text-center">{{ trans('adminlte::adminlte.i_already_have_a_membership') }}</a>
            </div>
        </div>
        <!-- /.form-box -->
    </div><!-- /.register-box -->

    <script language="Javascript">
        function validacaoEmail() {
            var field = document.getElementById("email");
            usuario = field.value.substring(0, field.value.indexOf("@"));
            dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);
            if ((usuario.length >=1) &&
                (dominio.length >=3) &&
                (usuario.search("@")==-1) &&
                (dominio.search("@")==-1) &&
                (usuario.search(" ")==-1) &&
                (dominio.search(" ")==-1) &&
                (dominio.search(".")!=-1) &&
                (dominio.indexOf(".") >=1)&&
                (dominio.lastIndexOf(".") < dominio.length - 1)) {
                document.getElementById("msgemail").innerHTML="";
            }
            else{
                document.getElementById("msgemail").innerHTML="<font color='red'>Email inválido </font>";
            }
        }
        function validarsenha() {
            var senha1 = document.getElementById("password");
            var senha2 = document.getElementById("password_confirmation");
            if (senha1.value != senha2.value){
                document.getElementById("msgsenha").innerHTML="<font color='red'>Senha não são iguais</font>";
            }
            else {
                document.getElementById("msgsenha").innerHTML="";
            }
        }
    </script>
@stop

@section('adminlte_js')
    @yield('js')
@stop
