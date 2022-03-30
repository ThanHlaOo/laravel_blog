<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->text(50),
            "description" => $this->faker->text(700),
            "user_id" => \App\Models\User::all()->random()->id,
            "category_id" => \App\Models\Category::all()->random()->id
        ];
    }
}
