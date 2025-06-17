<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evento>
 */
class EventoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->sentence(3),
            'fecha' => $this->faker->dateTimeBetween('+1 days', '+6 months'),
            'estado' => $this->faker->randomElement(['activo', 'cancelado', 'finalizado']),
            'auditorio' => $this->faker->randomElement(['Auditorio A', 'Auditorio B', 'Salón Principal']),
            'descripcion' => $this->faker->paragraph(),
            'imagen' => 'https://picsum.photos/1280/720?random=' . $this->faker->unique()->numberBetween(1, 1000),            
        ];
    }
}
