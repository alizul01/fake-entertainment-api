<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence(),
            'release_year' => $this->faker->year(),
            'genre' => $this->faker->word(),
            'duration' => $this->faker->numberBetween(60, 180),
            'scriptwriter' => $this->faker->name(),
            'producer' => $this->faker->name(),
            'cast' => $this->faker->realText(200),
            'box_office' => $this->faker->numberBetween(1000000, 200000000),
        ];
    }
}
