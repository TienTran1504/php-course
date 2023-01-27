<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Food::class;
    public function definition()
    {
        return [
            //\
            'name' => $this->faker->name,
            'count' => $this->faker->randomNumber,
            'description' => $this->faker->paragraph,
            'created_at'=>now(),
            'updated_at'=>now(),

        ];
    }
}