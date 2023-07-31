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
            // dog image from https://www.pexels.com/photo/adorable-animal-animal-photography-canine-356378/
            "image" => "https://images.pexels.com/photos/356378/pexels-photo-356378.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940",
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
            "image" => "https://images.pexels.com/photos/356378/pexels-photo-356378.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940",
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
            "breed" => "cat",
            "color" => "white",
             // cat image from https://www.pexels.com/photo/adorable-animal-animal-photography-canine-356378/
            "image" => "https://images.pexels.com/photos/45201/kitty-cat-kitten-pet-45201.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940",

            // "status" => 1,
            "category_id" => "2"
        ]);
    }
}
