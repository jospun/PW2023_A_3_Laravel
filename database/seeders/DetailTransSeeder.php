<?php

namespace Database\Seeders;

use App\Models\Detail_trans;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailTransSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Detail_trans::factory(10)->create();
    }
}
