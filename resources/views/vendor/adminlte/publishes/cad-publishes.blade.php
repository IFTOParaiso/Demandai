@extends('adminlte::page')

@section('title', 'Demandaí')

@section('content_header')
@stop

@section('content')
    <div class="container-fluid">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#tab_1" data-toggle="tab">Edital</a></li>
                <li><a href="#tab_2" data-toggle="tab">Áreas de Interesse</a></li>
                <li><a href="#tab_3" data-toggle="tab">Lista de Trasmissão</a></li>
                <li class="pull-right header"><i class="fa fa-file"></i> Cadastro de Edital</li>
            </ul>

                        <form action="{{route('cadastrar-edital')}}" method="post">
                            {!! csrf_field() !!}

                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1">
                                    <div class="container-fluid">

                                        <div class="form-group has-feedback {{ $errors->has('title') ? 'has-error' : '' }}">
                                            <input type="text" name="title" id="title" class="form-control"
                                                   value="{{ old('title') }}"
                                                   placeholder="Título" >
                                            <strong id="error-title" style="color: red"></strong>
                                            <span class="fa fa-file form-control-feedback"></span>
                                            @if ($errors->has('title'))
                                                <span class="help-block">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                                            @endif
                                        </div>
                                        <div class="form-group has-feedback {{ $errors->has('description') ? 'has-error' : '' }}">
                        <textarea type="text" name="description" id="description" class="form-control" value="{{ old('description') }}"
                                  placeholder="Descrição" style="height: 100px" ></textarea>
                                            <strong id="error-description" style="color: red"></strong>
                                            <span class="fa fa-file-text form-control-feedback"></span>
                                            @if ($errors->has('description'))
                                                <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                                            @endif
                                        </div>
                                        <div class="form-group has-feedback {{ $errors->has('date_closure') ? 'has-error' : '' }}">
                                            <input type="text" name="date_closure" id="date_closure" class="form-control textbox-n"
                                                   placeholder="Data de Encerramento" onfocus="(this.type='date')"
                                                    onblur="compare();">
                                            <strong id="error-date_closure" style="color: red"></strong>
                                            <div id="msdata"></div>
                                            <span class="fa fa-calendar form-control-feedback"></span>
                                            @if ($errors->has('date_closure'))
                                                <span class="help-block">
                            <strong>{{ $errors->first('date_closure') }}</strong>
                        </span>
                                            @endif
                                        </div>
                                        <div class="form-group has-feedback {{ $errors->has('link') ? 'has-error' : '' }}">
                                            <input type="text" name="link" id="link" class="form-control"
                                                   placeholder="Link de Acesso" >
                                            <strong id="error-link" style="color: red"></strong>
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
    <script language="Javascript">
        function compare()
        {
            var d1 = new Date();
            var endDt = document.getElementById("date_closure").value;

            if( (new Date(d1).getTime() > new Date(endDt).getTime()))
            {
                document.getElementById("msdata").innerHTML="<font color='red'>A data informada deve ser maior que a atual.</font>";
            }
            else{
                document.getElementById("msdata").innerHTML="<font color='red'></font>";
            }
        }
    </script>

@stop