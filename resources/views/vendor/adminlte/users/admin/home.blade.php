@extends('adminlte::page')

@section('title', 'Demandaí')

@section('content_header')
@stop

@section('content')
    <div class="content align-items-center">
        <a href="listar-edital">
            <div class="col-lg-6 col-xs-6">
                <div class="small-box bg-green-gradient">
                    <div class="inner">
                        <h3>EDITAIS</h3>
                        <br>
                        <small>Editais Cadastrados</small>
                    </div>
                    <div class="icon">
                        <i class="fa fa-file-text"></i>
                    </div>
                </div>
            </div>
        </a>
        <a href="listar-usuario/propi">
            <div class="col-lg-6 col-xs-6">
                <div class="small-box bg-aqua-gradient">
                    <div class="inner">
                        <h3>USUÁRIOS</h3>
                        <br>
                        <small>Usuários Cadastrados</small>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
@stop