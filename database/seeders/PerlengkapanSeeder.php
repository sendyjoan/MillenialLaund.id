<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerlengkapanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perlengkapan= array(
            array('nama' => 'Attack Power Detergen',
                'jumlah' => '30',
                'harga' => 9000, 
                'foto' => 'p1.png',
            ),
            array('nama' => 'Prokleen Detergen',
                'jumlah' => '5',
                'harga' => 11000,
                'foto' => 'p2.png',
            ),
            array('nama' => 'Tide Detergen',
                'jumlah' => '8',
                'harga' => 15000,
                'foto' => 'p3.png',
            ),
            array('nama' => 'Attack Easy Detergen',
                'jumlah' => '20',
                'harga' => 10000, 
                'foto' => 'p4.png',
            ),
            array('nama' => 'Rinso Liquid Detergen',
                'jumlah' => '15',
                'harga' => 15000, 
                'foto' => 'p5.png',
            ),
            array('name' => 'Vernel Detergen',
                'jumlah' => '15',
                'harga' => 15000, 
                'foto' => 'p6.png',
            ),
            array('name' => 'Fabric Parfume',
                'jumlah' => '15',
                'harga' => 15000, 
                'foto' => 'p7.png',
            ),
            array('name' => 'Bloom Parfume',
                'jumlah' => '50',
                'harga' => 7000, 
                'foto' => 'p8.png',
            ),
            array('name' => 'ProSmart Parfume',
                'jumlah' => '25',
                'harga' => 10000, 
                'foto' => 'p9.png',
            ),
            array('name' => 'OmaWangi Parfume',
                'jumlah' => '10',
                'harga' => 20000, 
                'foto' => 'p10.png',
            ),
            array('name' => 'Breezzy Parfume',
                'jumlah' => '20',
                'harga' => 12000, 
                'foto' => 'p11.png',
            ),
            array('name' => 'Sakura Parfume',
                'jumlah' => '30',
                'harga' => 10000,
                'foto' => 'p12.png', 
            ),
        );
        DB::table('perlengkapan')->insert($perlengkapan);
    }
}
