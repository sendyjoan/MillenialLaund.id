<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MesinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mesinlaundry= array(
            array('nama' => 'Mesin Cuci & Dryer AA',
                'cabang_id' => '1',
                'kapasitas' => 5, 
                'kode' => 'MAA',
                'harga' => 2,
                'status' => 'tersedia',
            ),
            array('nama' => 'Mesin Cuci & Dryer AB',
                'cabang_id' => '1',
                'kapasitas' => 5, 
                'kode' => 'MAB',
                'harga' => 2,
                'status' => 'tersedia',
            ),
            array('nama' => 'Mesin Cuci & Dryer AC',
                'cabang_id' => '2',
                'kapasitas' => 5, 
                'kode' => 'MAC',
                'harga' => 2,
                'status' => 'tersedia',
            ),
            array('nama' => 'Mesin Cuci & Dryer AD',
                'cabang_id' => '2',
                'kapasitas' => 5, 
                'kode' => 'MAD',
                'harga' => 2,
                'status' => 'tidak tersedia',
            ),
        );
        DB::table('mesinlaundry')->insert($mesinlaundry);
    }
}
