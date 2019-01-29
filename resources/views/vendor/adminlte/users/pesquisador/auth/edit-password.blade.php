@extends('adminlte::page')

@section('title', 'Demandaí')

@section('content_header')
@stop

@section('content')
    <div class="container-fluid">
        <div class="register-box-body">
            <h3 style="text-align: center"><i class="fa fa-lock"></i> Alterar senha</h3>

            @if(session('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <p>{{session('message')}}</p>
                </div>
            @endif

            <div class="container-fluid">

                    <form class="form-horizontal" method="post"
                          action="{{route('update-password', $user->id)}}">
                                {!! csrf_field() !!}
                                <div class="container-fluid">
                                    <div
                                            class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                                        <input type="password" name="password" id="password"
                                               class="form-control"
                                               placeholder="{{ trans('adminlte::adminlte.password') }}"
                                               required>
                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                        @endif
                                    </div>
                                    <div
                                            class="form-group has-feedback {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                                        <input type="password" name="password_confirmation"
                                               id="password_confirmation"
                                               class="form-control"
                                               placeholder="{{ trans('adminlte::adminlte.retype_password') }}"
                                               required>
                                        <span
                                                class="glyphicon glyphicon-log-in form-control-feedback"></span>
                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                        </span>
                                        @endif


                                    </div>

                                    <input type="submit" class="btn btn-primary pull-right" value="Salvar">
                                </div>
                    </form>

            </div>
        </div>
    </div>
@stop
