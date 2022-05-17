<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGame;
use App\Http\Requests\UpdateGame;
use App\Models\Game;
use App\Models\Team;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $teams= Team::all();

        return view('games.create', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGame $request)
    {

        $teams= new Team();
        $teams= Team::all();
        //$game= Game::create($request->all());
        //$game->slug= null;

        /*$game= Game::create([

            'fecha'=> $request->fecha,
            'lugar'=> $request->lugar,
            'id_equipo_A'=> $request->id_equipo_A,
            'id_equipo_B'=> $request->id_equipo_B,
            'comentarios'=> $request->comentarios,
            'slug'=> null
        ]);*/
        $game= new Game();
        $game->fecha= $request->fecha;
        $game->lugar= $request->lugar;
        $game->id_equipo_A= $request->id_equipo_A;
        $game->id_equipo_B= $request->id_equipo_B;
        $game->comentarios= $request->comentarios;
        $game->resultado_A= $request->resultado_A;
        $game->resultado_B= $request->resultado_B;
        $game->slug= null;

        $game->save();
        return redirect()->route('index', $game);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {

        return view('games.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        $teams= Team::all();
        return view('games.edit', compact('game', 'teams'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGame $request, Game $game)
    {

        //$game->update($request->all());
        //return view('games.update', $game);
        $game->fecha= $request->fecha;
        $game->lugar= $request->lugar;
        $game->id_equipo_A= $request->id_equipo_A;
        $game->id_equipo_B= $request->id_equipo_B;
        $game->comentarios= $request->comentarios;
        $game->slug= null;

        $game->save();
        return redirect()->route('index', $game);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {

        $game->delete();
        return redirect()->route('index');
        //return view('games.destroy');
    }
}
