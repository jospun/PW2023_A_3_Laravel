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
            'id_acara' => \App\Models\Acara::factory(),
            'nama' => $this->faker->words(3, true),
            'harga' => $this->faker->randomFloat(2, 0, 1000),
            'deskripsi' => $this->faker->text(200),
            'jenis' => $this->faker->randomElement(['Baju', 'Gantungan Kunci', 'Hoodie']),
            'stok' => $this->faker->numberBetween(0, 100),
            'gambar' => $this->faker->imageUrl(),
        ];
    }
}
