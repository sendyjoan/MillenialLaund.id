<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CabangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cabang= array(
            array('alamat' => 'Jln. Soekarno Hatta',
            'cabang' => 'Cabang1'),
            array('alamat' => 'Jln. Lowokwaru',
            'cabang' => 'Cabang2'),
            array('alamat' => 'Jln Simpang Ijen',
            'cabang' => 'Cabang3'),
        );
    
            DB::table('cabangs')->insert($cabang);
    }
}
