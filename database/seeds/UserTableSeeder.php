<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => '疯狂大东丶',
            'email' => 'crazy_dadong@outlook.com',
            'password' => bcrypt('0546GRD.wsfkdd'),
        ]);
    }
}
