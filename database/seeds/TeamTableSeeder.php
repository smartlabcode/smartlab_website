<?php

use Illuminate\Database\Seeder;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            ['name' => 'Irfan K.', 'title' => 'eLearning Designer', 'photo' => 'irfo-k.jpg'],
            ['name' => 'Ibrahim Z.', 'title' => 'eLearning / wordpress Developer', 'photo' => 'ibro.jpg'],
            ['name' => 'Haris M.', 'title' => 'eLearning / JS Developer', 'photo' => 'hare.jpg'],
            ['name' => 'Rizah K.', 'title' => 'Founder & CEO', 'photo' => 'rizah.jpg'],
            ['name' => 'Zulfo M.', 'title' => 'Full Stack Developer', 'photo' => 'zulfo.jpg'],
            ['name' => 'Irfan S.', 'title' => 'eLearning Designer', 'photo' => 'irfo-k.jpg'],
            ['name' => 'Aida R.', 'title' => 'eLearning / instructional Designer', 'photo' => 'aida.jpg'],
            ['name' => 'Emir M.', 'title' => 'Front-End / moodle developer', 'photo' => 'emir.jpg'],
            ['name' => 'Florin B.', 'title' => 'Front-End Developer', 'photo' => 'florin.jpg'],
            ['name' => 'Mirza O.', 'title' => 'Full Stack / DevOps', 'photo' => 'mirza.jpg'],
            ['name' => 'Emina K.', 'title' => 'PR / Administration Manager', 'photo' => 'emina.jpg'],
        ]);
    }
}
