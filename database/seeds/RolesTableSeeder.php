<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // before each seed truncate the table so that ids are always 1 for superadmin and 2 for admin
        DB::table('roles')->truncate();

        DB::table('roles')->insert([
            ['name' => 'superadmin'],
            ['name' => 'admin'],
            ['name' => 'xlf_user']
        ]);
    }
}
