<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123'),
                'role_id' => '1',
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' =>Hash::make('1234'),
                'role_id' => '2',
            ],[
                'name'  => 'Employee',
                'email' => 'emp@gmail.com',
                'password' => Hash::make('1234'),
                'role_id'  => '3',
            ]
            ]);
    }
}
