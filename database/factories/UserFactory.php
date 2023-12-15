<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_user' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'tanggal_lahir' => $this->faker->date(),
            'password' => Hash::make('password'),
            'no_telp' => $this->faker->phoneNumber,
            'role' => $this->faker->randomElement(['admin', 'user']),
            'verify_key' => Str::random(32),
            'active' => $this->faker->randomElement([0, 1]),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
