<?php

namespace Database\Seeders;

use App\Models\Pendaftaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pendaftaran::factory(10)->create();
    }
}
