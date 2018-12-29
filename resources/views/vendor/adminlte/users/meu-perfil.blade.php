@extends('adminlte::page')

@section('title', 'Demandaí')

@section('content_header')
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-body box-profile">
            {{--<img class="profile-user-img img-responsive img-circle" src="" alt="User profile picture">--}}

            <h3 class="profile-username text-center"><i class="fa fa-user-circle-o"></i> {{$user->name}}</h3>

            <p class="text-muted text-center"><i class="fa fa-sign-in"></i> {{$user->email}}</p>

            <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                    <b><i class="fa fa-graduation-cap"></i> Formação</b>
                    @if($user->formation == '1')
                        <a class="pull-right">Graduado</a>
                    @elseif($user->formation == '2')
                        <a class="pull-right">Graduado</a>
                    @elseif($user->formation == '3')
                        <a class="pull-right">Graduado</a>
                    @endif
                </li>
                <li class="list-group-item">
                    @foreach($institutions as $institution)
                        @if($institution->id == $user->institution_id)
                            <b><i class="fa fa-university"></i> Instituição</b> <a class="pull-right">{{$institution->name}}</a>
                        @endif
                    @endforeach
                </li>
                <li class="list-group-item">
                    <b><i class="fa fa-external-link"></i> Currículo Lattes</b> <a class="pull-right"><a href="{{$user->lattes}}" target="_blank" class="pull-right">{{$user->lattes}}</a></a>
                </li>
            </ul>

            <a href="{{route('editar-usuario',$user->id)}}" class="btn btn-success btn-block"><b>Editar Perfil</b></a>
        </div>
    </div>
@stop