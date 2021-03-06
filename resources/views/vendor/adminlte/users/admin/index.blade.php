@extends('adminlte::page')

@section('title', 'Demandaí')

@section('content_header')
@stop

@section('content')
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('listar-edital')}}" style="color: inherit">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-blue"><i class="fa fa-files-o"></i></span>

                            <div class="info-box-content">
                                <span spass="info-box-text" style="font-size: larger">Editais</span>
                                <span class="info-box-number">{{count($publishes)}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                </a>
                <!-- /.col -->
                <a href="{{url('listar-usuario/pesquisador')}}" style="color: inherit">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>

                            <div class="info-box-content">
                                <span spass="info-box-text" style="font-size: larger">Pesquisadores</span>
                                <span class="info-box-number">{{count($researchers)}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                </a>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix visible-sm-block"></div>
                <a href="{{url('list-instituicoes')}}" style="color: inherit">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-green"><i class="fa fa-university"></i></span>

                            <div class="info-box-content">
                                <span spass="info-box-text" style="font-size: larger">Instituições</span>
                                <span class="info-box-number">{{count($institutions)}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                </a>
                <!-- /.col -->
                <a href="{{route('areas-pesquisa')}}" style="color: inherit">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-aqua"><i class="fa fa-search"></i></span>

                            <div class="info-box-content">
                                <span spass="info-box-text" style="font-size: larger">Áreas de Pesquisa</span>
                                <span class="info-box-number">{{count($areas)}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                </a>
            </div> <!-- /.col -->

        </div>
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <i class="ion ion-clipboard"></i> Editais abertos
                                   </div>
                <!-- /.box-header -->
                <div class="publishes-box-body">

                    <table id="tabela-editais-abertos" class="table table-hover">
                        <thead>
                        <th>COD</th>
                        <th>Título</th>
                        <th>Descrição</th>
                        <th>Encerramento de inscrições</th>
                        </thead>
                        <tbody>
                        @forelse($publishes as $publish)
                            @if($publish->date_closure >=  Carbon\Carbon::today())
                                <tr>
                                    <td>{{$publish->id}}</td>
                                    <td><a class="card"
                                           href="{{url('detalhe-edital/show',$publish->id)}}">{{$publish->title}}</a>
                                    </td>
                                    <td>{{$publish->description}}</td>
                                    <td>{{date('d/m/Y', strtotime($publish->date_closure))}}</td>
                                </tr>
                            @endif
                        @empty
                            Não há registros

                        @endforelse
                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                </div>
            </div>
        </div>


        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <i class="ion ion-clipboard"></i> Área com maior frequência nos editais
                </div>
                <!-- /.box-header -->
                <div class="areas-publish-box-body">

                    <table id="tabela-editais-abertos" class="table table-hover">
                        <thead>
                        <th>COD</th>
                        <th>Nome</th>
                        <th>Frequência</th>

                        </thead>
                        <tbody>
                        @forelse($areasFpublishs as $areasFpublish)

                            <tr>
                                <td>{{$areasFpublish->area_id}}</td>
                                <td>{{$areasFpublish->name}}</td>
                                <td>{{$areasFpublish->qtd}}</td>

                            </tr>

                        @empty
                            Não há registros

                        @endforelse
                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <i class="ion ion-clipboard"></i> Áreas de interesse com maior número de pesquisadores
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="user-box-body">

                    <table id="tabela-editais-abertos" class="table table-hover">
                        <thead>
                        <th>COD</th>
                        <th>Nome</th>
                        <th>Quant. Pesquisadores</th>
                        </thead>
                        <tbody>
                        @forelse($areasUserFrequency as $auf)
                            <tr>
                                <td>{{$auf->area_id}}</td>
                                <td>{{$auf->name}}</td>
                                <td>{{$auf->qtd}}</td>
                            </tr>
                        @empty
                            Não há registros

                        @endforelse
                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <i class="ion ion-clipboard"></i> Pesquisadores com maior recebimento de notificações
                </div>
                <!-- /.box-header -->
                <div class="user-box-body">

                    <table id="tabela-editais-abertos" class="table table-hover">
                        <thead>
                        <th>COD</th>
                        <th>Nome</th>
                        <th>Frequência</th>
                        </thead>
                        <tbody>
                        @forelse($userRpublishes as $userRpublishe)
                            <tr>
                                <td>{{$userRpublishe->user_id}}</td>
                                <td>{{$userRpublishe->name}}</td>
                                <td>{{$userRpublishe->qtd}}</td>
                            </tr>
                        @empty
                            Não há registros

                        @endforelse
                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                </div>
            </div>
        </div>

    </div>



    <style>
        .publishes-box-body {
            max-height: 300px;
            overflow-x: auto;
        }

        .areas-publish-box-body {
            max-height: 200px;
            overflow-x: auto;
        }

        .user-box-body {
            height: 250px;
            overflow-x: auto;
        }
    </style>
@stop