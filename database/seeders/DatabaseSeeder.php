<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            PerlengkapanSeeder::class,
            CabangSeeder::class,
            MesinSeeder::class,
            BookingSeeder::class,
            PembayaranSeeder::class
        ]);
    }
}
