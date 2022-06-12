<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role= array(
            array('role' => 'Admin'),
            array('role' => 'User'),
        );
    
            DB::table('roles')->insert($role);
    }
}
