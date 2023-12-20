<?php

namespace Database\Factories;

use App\Models\Acara;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Acara>
 */
class AcaraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_acara' => $this->faker->words(3, true),
            'deskripsi' => $this->faker->text(100),
            'tanggal_mulai' => $this->faker->date(),
            'tanggal_tutup' => $this->faker->date(),
            'biaya' => $this->faker->randomFloat(2, 0, 1000),
            'poster' => $this->faker->imageUrl(),
        ];
    }
}
