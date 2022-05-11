@extends('layouts.plantilla')

@section('title', 'team list')

@section('content')



    <p><strong>ID: </strong>{{$team->id}}</p>
    <p><strong>Nombre: </strong>{{$team->nombre}}</p>
    <p><strong>Tipo: </strong>{{$team->tipo}}</p>
    <p><strong>Descripción: </strong>{{$team->descripcion}}</p>

    <a class="btn ml-2 mr-2 text-center text-sm bg-green-500 hover:bg-green-700 text-white font-bold rounded" href="{{route('team.edit', $team)}}">Editar</a>

    <form action="{{route('team.destroy', $team)}}" method="POST">

        @method('delete')
        @csrf

    <button class="btn ml-2 mr-2 text-center text-sm bg-red-500 hover:bg-red-700 text-white font-bold rounded" href="{{route('team.destroy', $team)}}">Eliminar</button>

</form>







@endsection
