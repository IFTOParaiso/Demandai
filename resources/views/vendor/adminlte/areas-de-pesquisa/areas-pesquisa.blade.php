@extends('adminlte::page')

@section('title', 'Demandaí')

@section('content_header')
@stop

@section('content')
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3><i class="fa fa-search"></i> Instituições</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>

            <!-- /.box-header -->
            <div class="box-body">

                <table id="usuarios-propi" class="table table-hover">
                    <thead>
                    <th>Áreas</th>
                    <th>Big Áreas</th>
                    </thead>
                    <tbody>
                    @forelse($areas as $area)
                        <tr>
                            <td>  <a class="card" href="#">{{$area->name}}</a></td>
                            @foreach($bigAreas as $bigArea)
                                @if($area->big_area_id == $bigArea->id)
                                    <td>{{$bigArea->name}}</td>
                                @endif
                            @endforeach
                        </tr>
                    @empty
                        Não há registros

                    @endforelse
                    </tbody>
                </table>
                <!-- /.table-responsive -->
            </div>


        </div>
    </section>

    <style>
        .table-overflow {
            max-height:400px;
            overflow-x:auto;
        }
    </style>
@stop