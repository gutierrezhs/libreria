<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(),
            'autor' => $this->faker->name(),
            'anno_publicacion' => $this->faker->date('Y-m-d'),
            'genero' => $this->faker->randomElement(['Aventura','Ciencia Ficcion','Policiaca','Terror Misterio','Romantica','Mitologia','Teatro','Cuento']),
            'disponible' => $this->faker->numberBetween(0, 10),
            
        ];
    }
}
