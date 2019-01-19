@extends('adminlte::master')

@section('adminlte_css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/iCheck/square/blue.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/auth.css') }}">
    @yield('css')
@stop

@section('body_class', 'login-page')

@section('body')
    <div class="text-right">
        <a href="{{route('login-usuario', 'administrador')}}" class="text-center">Acesso Administrador</a>
    </div>
    <div class="login-box">


        <div class="login-box-body">
            <div class="login-logo"><img src="{{ asset('vendor/adminlte/img/logo.png')}}" alt="" height="130px"></div>
            <div class="login-logo">
                <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}">{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</a>
            </div>
            <p class="login-box-msg">Selecione o módulo desejado!</p>


            @if(!empty($errors->first()))

                <div class="alert alert-danger">
                    <span>{{ $errors->first() }}</span>
                </div>
            @endif

            <div class="form-group has-feedback">
                <span class=" fa fa-user-circle form-control-feedback" style="color: white; font-size: 20px"></span>
                <a href="{{route('login-usuario', 'propi')}}" class="btn btn-primary btn-block"
                   style="font-size: 20px">Propi</a>
            </div>
            <div class="form-group has-feedback">
                <span class="fa fa-book form-control-feedback" style="color: white; font-size: 20px"></span>
                <a href="{{route('login-usuario', 'pesquisador')}}" class="btn btn-primary btn-block"
                   style="font-size: 20px">Pesquisador</a>
            </div>
        </div>
    </div>
@stop

@section('adminlte_js')
    <script src="{{ asset('vendor/adminlte/plugins/iCheck/icheck.min.js') }}"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
    @yield('js')
@stop
