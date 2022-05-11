@extends('layouts.plantilla')

@section('title', 'match list')

@section('content')
<div>

    <p><strong>Fecha: </strong>{{$game->fecha}}</p>
    <p><strong>Lugar: </strong>{{$game->lugar}}</p>
    <p><strong>Equipo local: </strong>{{$game->id_equipo_A}}</p>
    <p><strong>Equipo visitante: </strong>{{$game->id_equipo_B}}</p>


    <a class="btn ml-2 mr-2 text-center text-sm bg-green-500 hover:bg-green-700 text-white font-bold rounded" href="{{route('game.edit', $game)}}">Editar</a>

    <form action="{{route('game.destroy', $game)}}" method="POST">

        @method('delete')
        @csrf
        <button type="submit" class="btn ml-2 mr-2 text-center text-sm bg-red-500 hover:bg-red-700 text-white font-bold rounded">Eliminar</button>
        </form>
</div>

@endsection
