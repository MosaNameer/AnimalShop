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
            'id' => 1,
            'name' => 'mosa',
            'email' => 'mosa@gmail.com',
            'password' => bcrypt('12121212'),
        ]);
        User::create([
            'id' => 2,
            'name' => 'mohamed',
            'email' => 'mohamed@gmail.com',
            'password' => bcrypt('12121212'),
        ]);
        User::create([
            'id' => 3,
            'name' => 'zain',
            'email' => 'zain@gmail.com',
            'password' => bcrypt('12121212'),
        ]);
    }
}
