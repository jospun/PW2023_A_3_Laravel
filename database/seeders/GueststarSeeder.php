<?php

namespace Database\Seeders;

use App\Models\Gueststar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GueststarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gueststar::factory(10)->create();
    }
}
