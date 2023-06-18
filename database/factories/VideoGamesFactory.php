<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VideoGames>
 */
class VideoGamesFactory extends Factory
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
            'game_title' => $this->faker->sentence(),
            'platform' => $this->faker->word(),
            'developer' => $this->faker->company(),
            'genre' => $this->faker->word(),
            'release_year' => $this->faker->year(),
            'game_engine' => $this->faker->word(),
            'publisher' => $this->faker->company(),
            'platforms' => $this->faker->randomElement(['PC', 'PlayStation', 'Xbox', 'Nintendo']),
            'sales' => $this->faker->numberBetween(10000, 5000000),
        ];
    }
}
