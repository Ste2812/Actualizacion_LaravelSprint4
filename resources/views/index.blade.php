@extends('layouts.plantilla')

@section('title', 'index')

@section('content')

<br><br>
<div class="px-2 container mx-auto">
    <div class="flex -mx-2">
        <div class="w-1/2 px-2">
<div>
<table class="ml-4 border-4 border-black">
    <thead>
    <tr>
        <th class="pr-10 border-r-2 border-black">ID</th>
        <th class="pr-20 border-r-2 border-black">nombre</th>
        <th class="pr-20 border-r-2 border-black">tipo</th>
        <th class="px-2 border-b-2 border-black text-center">Opcion</th>


    </tr>
    </thead>
    @foreach ($teams as $team)

<tbody>
<tr>
    <td class="border-2 border-black font-semibold">{{$team->id}}</td>

    <td class="border-2 border-black">{{$team->nombre}}</td>
    <td class="border-2 border-black">{{$team->tipo}}</td>
    <td class="border-b-2 border-black"><a class="btn ml-2 text-center text-sm bg-blue-500 hover:bg-blue-700 text-white font-bold rounded" href="{{route('team.show', $team)}}">Mostrar</a></td>

</tr>
</tbody>


    @endforeach
</table>
{{$teams->links()}}
</div>
</div>

<div class="w-1/2 px-2">
    <div>
    <br><br>


    <table class="ml-4 border-4 border-black">
        <thead>
        <tr>
            <th class="pr-10 border-r-2 border-black">ID</th>
            <th class="pr-20 border-r-2 border-black">Fecha</th>
            <th class="pr-20 border-r-2 border-black">Lugar</th>
            <th class=" border-r-2 border-black">Equipo local</th>
            <th class=" border-r-2 border-black">Equipo visitante</th>
            <th class="px-2 border-b-2 border-black text-center">Opcion</th>


        </tr>
        </thead>
        @foreach ($games as $game)

    <tbody>
    <tr>
        <td class="border-2 border-black font-semibold">{{$game->id}}</td>
        <td class="border-2 border-black">{{$game->fecha}}</td>
        <td class="border-2 border-black">{{$game->lugar}}</td>
        <td class="border-2 border-black">{{$game->id_equipo_A}}</td>
        <td class="border-2 border-black">{{$game->id_equipo_B}}</td>

        <td class="border-b-2 border-black"><a class="btn ml-2 text-center text-sm bg-sky-500 hover:bg-sky-700 text-white font-bold rounded" href="{{route('game.show', $game)}}">Mostrar</a></td>

    </tr>
    </tbody>


        @endforeach
    </table>
    {{$games->links()}}
</div>
</div>
</div>

@endsection
