<?php

namespace Database\Factories;

use App\Models\Foodmenu;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class FoodMenuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Foodmenu::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'title' => $this->faker->name(),
            // 'category' => Str::random(10),
        ];
    }
}
