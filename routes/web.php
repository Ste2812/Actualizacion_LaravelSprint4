<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TeamController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/inde', function () {
    return view('welcome');
});

Route::get('/', IndexController::class)->name('index');

Route::controller(TeamController::class)->group(function(){

Route::get('team/create','create')->name('team.create');

Route::post('team', 'store')->name('team.store');

Route::get('team/{team}/list', 'show')->name('team.show');

Route::get('team/{team}/edit', 'edit')->name('team.edit');

Route::put('team/{team}', 'update')->name('team.update');

Route::delete('team/{team}', 'destroy')->name('team.destroy');
});


Route::controller(GameController::class)->group(function(){

Route::get('game/register', 'create')->name('game.create');

Route::post('game', 'store')->name('game.store');

Route::get('game/list{game}', 'show')->name('game.show');

Route::get('game/{game}/edit', 'edit')->name('game.edit');

Route::put('game/{game}', 'update')->name('game.update');

Route::delete('game/{game}', 'destroy')->name('game.destroy');
});


/*Route::resource('partidos', GameController::class)->parameters(['partidos' => 'game'])->names('game'); //con el metodo resource se pueden agrupar en una linea
                                                //varias rutas, además de asignar automaticamente el nombre de las rutas.
                                                //Con el metodo parameters mantenemos inmutados las variables de almacenamiento y metodo
                                */                //names mantiene la definición de rutas en controllers y views

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
