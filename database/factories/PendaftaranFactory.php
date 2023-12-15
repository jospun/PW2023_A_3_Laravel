<?php

namespace Database\Factories;

use App\Models\Pendaftaran;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pendaftaran>
 */
class PendaftaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_user' => \App\Models\User::factory(),
            'id_acara' => \App\Models\Acara::factory(),
            'status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
            'tanggal_bayar' => $this->faker->dateTimeBetween('-1 years', '+1 years')->format('Y-m-d'),
        ];
    }
}
