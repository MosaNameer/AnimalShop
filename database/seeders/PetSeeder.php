<?php

namespace Database\Seeders;
use App\Models\Pet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pet::create([
            "id" => "1",
            "name" => "dog",
            "age" => "2",
            "price" => 300,
            "gender" => 1,
            "description" => "dog",
            "breed" => "dog",
            "color" => "black",
            "image" => "dog.jpg",
            // "status" => 1,
            "category_id" => "1"
        ]);
        Pet::create([
            "id" => "2",
            "name" => "dog2",
            "age" => "4",
            "price" => 500,
            "gender" => 1,
            "description" => "dog",
            "breed" => "dog",
            "color" => "white",
            "image" => "dog.jpg",
            // "status" => 2,
            "category_id" => "1"
        ]);
        Pet::create([
            "id" => "3",
            "name" => "cat",
            "age" => "4",
            "price" => 500,
            "gender" => 2,
            "description" => "cat description",
            "breed" => "dog",
            "color" => "white",
            "image" => "cat.jpg",
            // "status" => 1,
            "category_id" => "2"
        ]);
    }
}
