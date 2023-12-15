<?php

namespace Database\Seeders;

use App\Models\Souvenir;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SouvenirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Souvenir::factory(10)->create();
    }
}
