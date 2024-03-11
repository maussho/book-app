<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

// importamos los modelos que vamos a usar
use App\Models\Editorial;
use App\Models\Gender;

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
    public function definition()
    {
        return [
            // Llenar todos los campos que tiene Book
            'title' => $this->faker->text(35),
            'subtitle' => $this->faker->text(100),
            'numberPage' => $this->faker->numberBetween(200, 500),
            'language' => $this->faker->randomElement(['Español', 'Ingles', 'Portugues']),
            'description' => $this->faker->text(200),
            'status' => $this->faker->randomElement(['Activo', 'Bloqueado']),
            'price' => $this->faker->randomNumber(3),
            // en el campo gender_id escoge todos los generos eligiendo ramdonicamente el id
            'gender_id' => Gender::all()->random()->id,
            'editorial_id' => Editorial::all()->random()->id,

        ];
    }
}
