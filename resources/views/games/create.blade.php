@extends('layouts.plantilla')

@section('title', 'registro partido')

@section('content')


    <div class="m-20">
        <form class="m-20 overflow-auto block p-6 rounded-lg shadow-lg bg-white max-w-md" action="{{route('game.store')}}" method="POST">
            @csrf

            <div class="mb-2">
                <label class="block mb-2 text-sm font-medium text-gray-900">
                    Lugar:
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="lugar" type="text" name="lugar" value="{{old('lugar')}}">
                </label>
                </div>

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
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="id_equipo_B">
                           @foreach ($teams as $team)
                            <option></option>
                            <option value="{{$team->id}}">{{$team->nombre}}</option>
                            @endforeach
                        </select>
                    </label>

                    </div>

                <div class="mb-2">
                <label for="start" class="block mb-2 text-sm font-medium text-gray-900 ">
                    Fecha:
                    <br>
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="date"

                     id="fecha" name="fecha" value="{{old('fecha')}}">
                </label>
                @error('fecha')

                <small>*{{$message}}</small>

                @enderror
                </div>

                <div class="mb-2">
                <label>
                    Descripcion:

                    <textarea class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="nombre" name="descripcion" id="" cols="10" rows="5">{{old('descripcion')}}</textarea>
                </label>
                </div>


                <button class="h-8 px-4 text-center text-l bg-green-500 hover:bg-green-700 text-white font-bold rounded" type="submit">Registrar</button>
            </form>
        </div>
@endsection

