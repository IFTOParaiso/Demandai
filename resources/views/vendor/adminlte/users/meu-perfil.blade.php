@extends('adminlte::page')

@section('title', 'Demandaí')

@section('content_header')
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-body box-profile">
            {{--<img class="profile-user-img img-responsive img-circle" src="" alt="User profile picture">--}}

            <h3 class="profile-username text-center"><i class="fa fa-user-circle-o"></i> {{Auth::user()->name}}</h3>

            <p class="text-muted text-center"><i class="fa fa-sign-in"></i> {{Auth::user()->email}}</p>

            <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                    <b><i class="fa fa-graduation-cap"></i> Formação</b>
                    @if(Auth::user()->formation == '1')
                        <a class="pull-right">Graduado</a>
                    @elseif(Auth::user()->formation == '2')
                        <a class="pull-right">Mestre</a>
                    @elseif(Auth::user()->formation == '3')
                        <a class="pull-right">Doutor</a>
                    @endif
                </li>
                <li class="list-group-item">
                    @foreach($institutions as $institution)
                        @if($institution->id == Auth::user()->institution_id)
                            <b><i class="fa fa-university"></i> Instituição</b> <a class="pull-right">{{$institution->name}}</a>
                        @endif
                    @endforeach
                </li>
                <li class="list-group-item">
                    <b><i class="fa fa-external-link"></i> Currículo Lattes</b> <a class="pull-right"><a href="{{Auth::user()->lattes}}" target="_blank" class="pull-right">{{Auth::user()->lattes}}</a></a>
                </li>
            </ul>

            <a href="{{route('editar-usuario',Auth::user()->id)}}" class="btn btn-success pull-right"><b>Editar Perfil</b></a>
        </div>
    </div>
@stop