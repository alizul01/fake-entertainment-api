<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Music>
 */
class MusicFactory extends Factory
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
            'track_name' => $this->faker->sentence(),
            'artist' => $this->faker->name(),
            'album' => $this->faker->word(),
            'track_length' => $this->faker->time(),
            'lyricist' => $this->faker->name(),
            'composer' => $this->faker->name(),
            'label' => $this->faker->company(),
            'album_sales' => $this->faker->numberBetween(10000, 10000000),
        ];
    }
}
