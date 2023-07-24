<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // id 1
        User::create([
            'name' => 'mosa',
            'email' => 'mosa@gmail.com',
            'password' => bcrypt('12121212'),
        ]);
    }
}
