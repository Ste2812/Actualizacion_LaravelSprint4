@extends('layouts.plantilla')

@section('title', 'team register')

@section('content')

<div class="m-20">
    <form class="m-20 overflow-auto block p-6 rounded-lg shadow-lg bg-white max-w-md" action="{{route('team.store')}}" method="POST">
        @csrf

        <div class="mb-2">
        <label class="block mb-2 text-sm font-medium text-gray-900">
            Nombre:
            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="nombre" value="{{old('nombre')}}">
        </label>
        @error('nombre')
        <small>*{{$message}}</small>
        @enderror
        </div>

        <div class="mb-2">
        <label class=" mb-2 text-sm font-medium text-gray-900 ">
            Tipo:
            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="tipo">
                <option></option>
                <option value="escuela">Escuela</option>
                <option value="club_deportivo">Club deportivo</option>
                <option value="otro">Otro</option>
            </select>
        </label>
        @error('tipo')
        <small>*{{$message}}</small>
        @enderror
        </div>

        <div class="mb-2">
        <label class="block mb-2 text-sm font-medium text-gray-900 ">
            Numero jugadores:
            <br>
            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="number" id="num_jugadores" name="num_jugadores" value="{{old('num_jugadores')}}">
        </label>
        @error('num_jugadores')
        <small>*{{$message}}</small>
        @enderror
        </div>

        <div class="mb-2">
        <label>
            Descripcion:

            <textarea class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="nombre" name="descripcion" id="" cols="10" rows="5">{{old('descripcion')}}</textarea>
        </label>
        </div>

        <button class="h-8 px-4 text-center text-l bg-green-500 hover:bg-green-700 text-white font-bold rounded" type="submit">Registar</button>

    </form>
</div>


@endsection

