<?php

namespace Database\Factories;

use App\Models\PlatoMenu;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlatoMenuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PlatoMenu::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->randomElement(['titol','titol2']),
            'image_path'=>$this->faker->randomElement(['zDw3AtM0rY4D2oOk5swYCsTlMITBCOdK24c1XmgI.jpg']),
            'description'=>$this->faker->randomElement(['Això es un plat aleatori','AixO es un plat aleatori']),
            'preu'=>$this->faker->randomElement(['35.35','23.22','15.99']),
            'menu_id'=>$this->faker->randomElement(['1','2','3'])
        ];
    }
}
