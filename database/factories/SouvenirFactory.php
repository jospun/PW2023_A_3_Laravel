<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Souvenir>
 */
class SouvenirFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->words(3, true),
            'harga' => $this->faker->randomFloat(2, 0, 1000),
            'deskripsi' => $this->faker->text(200),
            'jenis' => $this->faker->randomElement(['type1', 'type2', 'type3']),
            'gambar' => $this->faker->imageUrl(),
        ];
    }
}
