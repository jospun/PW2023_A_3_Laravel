<?php

namespace Database\Seeders;

use App\Models\Acara;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Acara::factory(10)->create();
    }
}
