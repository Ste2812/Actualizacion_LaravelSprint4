
@extends('layouts.plantilla')

@section('title', 'actualizar partido')

@section('content')

    <div class="ml-4">
        <form action="{{route('game.update', $game)}}" method="POST">
            @csrf
            @method('put')

            <label>
                Lugar:
                <br>
                <input type="text" name="lugar" value="{{old('lugar', $game->lugar)}}">
            </label>
            <br>
            <label for="start">
                Fecha
                <br>
                <input type="date" name="fecha" id="fecha" value="{{old('fecha', $game->fecha)}}">
            </label>
                <div class="mb-2">
                    <label class="block mb-2 text-sm font-medium text-gray-900 ">
                        Equipo local:
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="id_equipo_A" id="id_equipo_A">
                            @foreach ($teams as $team)
                                <option></option>
                                <option value="{{$team->id}}">{{$team->nombre}}</option>
                                @endforeach
                        </select>
                    </label>
                    </div>
                    <div class="mb-2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 ">
                            Equipo visitante:
                            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="id_equipo_B" id="id_equipo_B">
                               @foreach ($teams as $team)
                                <option></option>
                                <option value="{{$team->id}}">{{$team->nombre}}</option>
                                @endforeach
                            </select>
                        </label>
            <br>
            <label>
                Comentarios:
                <br>
                <textarea name="comentario" id="" cols="18" rows="8">{{old('comentario', $game->comentarios)}}</textarea>
            </label>
            <br><br>
            <button class="h-8 px-4 text-center text-l bg-green-500 hover:bg-green-700 text-white font-bold rounded" type="submit">Actualizar</button>

        </form>
    </div>
@endsection