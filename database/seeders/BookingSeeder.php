<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $booking= array(
            array('user_id' => 2,
                'perlengkapan_id' => 1,
                'mesin_id' => 2, 
                'tgl_booking' => '2022-06-11',
                'total_transaksi' => 29000,
            ),
            array('user_id' => 2,
                'perlengkapan_id' => 4,
                'mesin_id' => 3, 
                'tgl_booking' => '2022-06-11',
                'total_transaksi' => 30000,
            ),
        );
        DB::table('booking')->insert($booking);
    }
}
