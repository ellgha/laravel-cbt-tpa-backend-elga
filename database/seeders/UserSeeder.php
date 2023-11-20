<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\User::create([
            'name' => 'Admin elga',
            'email' => 'elga@fic10.com',
            'password' => Hash::make('12345'),
            'roles' => 'ADMIN',
            'phone' => '081234567890',
        ]);
        \App\Models\User::factory(100)->create();
    }
}
