<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Mirza', 'lastname' => 'Oglecevac', 'email' => 'mirzao@smartlab.ba', 'password' => '$2y$10$JUmbfiQasrcUra0HpZr4nOl37iLeOEjFk1mIWufD4u3XfNdhPEVrS', 'roles_id' => 1],
            ['name' => 'Haris', 'lastname' => 'Muslic', 'email' => 'harism@smartlab.ba', 'password' => '$2y$10$NI1708dYx4Xvu4F/vjnNc.UfnBK7krgs0HAruS2OGWbqKTI7sWG.6', 'roles_id' => 2],
            ['name' => 'Emir', 'lastname' => 'Mekic', 'email' => 'emirm@smartlab.ba', 'password' => '$2y$10$Y9fW7OuMHEfZiOK7R/k56uLP2HLJGVra9.0deWed1aMjaeUZ3iEQy.', 'roles_id' => 1],
        ]);
    }
}
