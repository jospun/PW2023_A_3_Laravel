<?php

namespace Database\Factories;

use App\Models\Detail_trans;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Detail_trans>
 */
class Detail_transFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_item' => \App\Models\Souvenir::factory(),
            'id_transaksi' => \App\Models\Transaksi::factory(),
            'jumlah' => $this->faker->numberBetween(1, 10),
            'subtotal' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }
}
