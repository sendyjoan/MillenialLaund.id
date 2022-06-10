<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= array(
            array('username' => 'Bintang',
                'name' => 'Bintang Adiyatma',
                'email' => 'bintang12@gmail.com',
                'role_id' => 1,
                'tanggal_lahir' => '2001-12-04',
                'alamat' => 'Trenggalek',
                'jenis_kelamin' => 'laki-laki',
                'nomer_hp' => '095432178099',
                'foto' => 'boy.png',
                'password' => Hash::make('password'),
            ),
            array('username' => 'Amanda',
            'name' => 'Amanda Calista',
            'email' => 'amandata@gmail.com',
            'role_id' => 2,
            'tanggal_lahir' => '2001-05-21',
            'alamat' => 'Malang',
            'jenis_kelamin' => 'perempuan',
            'nomer_hp' => '081456098111',
            'foto' => 'woman.png',
            'password' => Hash::make('password'),
        ),  
        );
    
            DB::table('users')->insert($user);
    }
}
