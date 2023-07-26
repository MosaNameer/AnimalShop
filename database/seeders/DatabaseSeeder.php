<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @return void
     */
    public function run()
    {
        //  call sedeers
        $this->call([
            CategorySeeder::class,
            PetSeeder::class,
            UserSeeder::class,
        ]);
    }
}
