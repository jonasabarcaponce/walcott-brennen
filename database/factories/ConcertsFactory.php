<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Concert>
 */
class ConcertsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(3);

        return [
            'title' => $title,
            'slug' => Str::slug($title) . '-' . Str::random(5),
            'description' => $this->faker->paragraph(),
            'venue' => $this->faker->company . ' Hall',
            'city' => $this->faker->city,
            'date' => $this->faker->dateTimeBetween('+1 week', '+6 months')->format('Y-m-d'),
            'start_time' => $this->faker->time('H:i'),
            'ticket_price' => $this->faker->randomFloat(2, 100, 2000),
            'is_published' => $this->faker->boolean(80), // 80% chance published
        ];
    }
}
