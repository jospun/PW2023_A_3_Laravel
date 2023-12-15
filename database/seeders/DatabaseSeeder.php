<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Acara;
use App\Models\Detail_trans;
use App\Models\Gueststar;
use App\Models\Pendaftaran;
use App\Models\Souvenir;
use App\Models\Transaksi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // php artisan db:seed

        $this->call([
            UserSeeder::class,
            GueststarSeeder::class,
            AcaraSeeder::class,
            PendaftaranSeeder::class,
            SouvenirSeeder::class,
            TransaksiSeeder::class,
            DetailTransSeeder::class,
        ]);
    }
}
