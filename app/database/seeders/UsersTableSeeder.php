<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('users')->insert([
            'name' => '管理者ユーザ1',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);
    }

}
