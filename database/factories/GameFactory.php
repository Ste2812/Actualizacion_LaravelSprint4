<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Game;
use App\Models\Team;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Game::class;
    public function definition()
    {
        $name=$this->faker->sentence();
        return [
            'fecha'=>$this->faker->date(),
            'slug'=>Str::slug($name, '_'),
            'lugar'=>$this->faker->city(),
            'id_equipo_A'=>$this->faker->randomElement(Team::all()->pluck('id')->toArray()),
            'id_equipo_B'=>$this->faker->randomElement(Team::all()->pluck('id')->toArray()),
            'comentarios'=>$this->faker->paragraph()
        ];
    }
}
