<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Team;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Team::class;
    public function definition()
    {
        $name=$this->faker->sentence();
        return [
            'nombre'=>$this->faker->streetName(),
            'slug'=>Str::slug($name, '_'),
            'tipo'=>$this->faker->randomElement(['club_deportivo','escuela','otro']),
            'num_jugadores'=>$this->faker->numberBetween(8, 10),
            'descripcion'=>$this->faker->paragraph()
        ];
    }
}
