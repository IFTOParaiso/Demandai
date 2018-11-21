@extends('adminlte::master')

@section('adminlte_css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/auth.css') }}">
    @yield('css')
@stop

@section('body_class', 'register-page')

@section('body')
    <div class="register-box">
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


            <form action="{{route('registrar-pesquisador')}}" method="post">
                {!! csrf_field() !!}

                <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}"
                           placeholder="{{ trans('adminlte::adminlte.full_name') }}">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                           placeholder="{{ trans('adminlte::adminlte.email') }}">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                    <input type="password" name="password" class="form-control"
                           placeholder="{{ trans('adminlte::adminlte.password') }}">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                    <input type="password" name="password_confirmation" class="form-control"
                           placeholder="{{ trans('adminlte::adminlte.retype_password') }}">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>

                @if($tipo_usuario <> 'propi')

                    <div class="form-group has-feedback {{ $errors->has('lattes') ? 'has-error' : '' }}">
                        <input type="text" name="lattes" class="form-control" value="{{ old('lattes') }}"
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
                            <select id="formation" name="formation" class="form-control">
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
                            <select id="institution_id" name="institution_id" class="form-control">
                                @forelse($institutions as $institution)
                                    <option value="{{$institution->id}}">{{$institution->name}}</option>
                                @empty
                                    Não há instituições
                                @endforelse
                            </select>
                        </div>
                    </div>
                @endif

                @if($tipo_usuario == 'propi')
                    <input type="hidden" id="tipousuario" name="tipousuario[]" value="2">
                @endif

                @if($tipo_usuario == 'pesquisador')
                    <input type="hidden" id="tipousuario" name="tipousuario[]" value="3">
                @endif

                <input type="hidden" id="status" name="status" value="1">


                <button type="submit"
                        class="btn btn-primary btn-block btn-flat"
                >{{ trans('adminlte::adminlte.register') }}</button>
            </form>
            <div class="auth-links">
                <a href="{{ url('/') }}"
                   class="text-center">{{ trans('adminlte::adminlte.i_already_have_a_membership') }}</a>
            </div>
        </div>
        <!-- /.form-box -->
    </div><!-- /.register-box -->
@stop

@section('adminlte_js')
    @yield('js')
@stop
