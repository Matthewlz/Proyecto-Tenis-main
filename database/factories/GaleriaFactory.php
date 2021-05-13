<?php

namespace Database\Factories;

use App\Models\Galeria;
use Illuminate\Database\Eloquent\Factories\Factory;

class GaleriaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Galeria::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->randomElement(['titol','titol2']),
            'image_path'=>$this->faker->randomElement(['VYotU1dTj0BHYnQ6igsC3eZzezqBpV0tl2GjloWo.jpg','VYotU1dTj0BHYnQ6igsC3eZzezqBpV0tl2GjloWo.jpg']),
            'description'=>$this->faker->randomElement(['AixO es un text aleatori','AixO es un text aleatori']),
        ];
    }
}
