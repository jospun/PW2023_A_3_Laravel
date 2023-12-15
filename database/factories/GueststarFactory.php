<?php

namespace Database\Factories;

use App\Models\Gueststar;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gueststar>
 */
class GueststarFactory extends Factory
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
            'nama' => $this->faker->name,
            'deskripsi' => $this->faker->paragraph,
            'foto' => $this->faker->imageUrl(640, 480, 'people'),
        ];
    }
}
