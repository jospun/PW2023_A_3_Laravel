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
            'tanggal_mulai' => $this->faker->dateTimeBetween('-1 years', '+1 years'),
            'tanggal_tutup' => $this->faker->dateTimeBetween('-1 years', '+1 years'),
            'biaya' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }
}
