@extends('layouts.plantilla')

@section('title', 'team edit')

@section('content')
    <h1>pagina para editar equipo</h1>
    <div class="ml-4">
        <form action="{{route('team.update', $team)}}" method="POST">
            @csrf
            @method('put')

            <label>
                Nombre:
                <br>
                <input type="text" name="nombre" value="{{old('nombre', $team->nombre)}}">
            </label>
            <br>
            <label>
                @error('nombre')
                <br>
                <small>*{{$message}}</small>
                <br>
                @enderror
                Tipo:
                <br>
                <select name="tipo">
                    <option></option>
                    <option value="escuela">Escuela</option>
                    <option value="club_deportivo">Club deportivo</option>
                    <option value="otro">Otro</option>
                    {{$team->tipo}}
                </select>
            </label>
            @error('tipo')
                <br>
                <small>*{{$message}}</small>
                <br>
                @enderror
            <br>
            <label>
                Numero jugadores:
                <br>
                <input type="number" id="num_jugadores" name="num_jugadores" value="{{old('num_jugadores', $team->num_jugadores)}}">
            </label>
            @error('num_jugadores')
                <br>
                <small>*{{$message}}</small>
                @enderror
                <br>
            <label>
                Descripcion:
                <br>
                <textarea name="descripcion" id="" cols="18" rows="8">{{old('descripcion', $team->descripcion)}}</textarea>
            </label>
            <br><br>
            <button class="h-8 px-4 text-center text-l bg-green-500 hover:bg-green-700 text-white font-bold rounded" type="submit">Actualizar</button>

        </form>
    </div>
@endsection
