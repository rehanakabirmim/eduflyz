<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('12345'),
                'role' => 'admin'
            ],

            [
                'name' => 'Arindam Utsha',
                'username' => 'arindam',
                'email' => 'teacher@example.com',
                'password' => Hash::make('12345'),
                'role' => 'teacher'
            ],

            [
                'name' => 'Rakib Hasan',
                'username' => 'rakib',
                'email' => 'user@example.com',
                'password' => Hash::make('12345'),
                'role' => 'user'
            ],


        ]);
    }
}
