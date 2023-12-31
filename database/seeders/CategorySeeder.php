<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            "id" => "1",
            "name" => "dog",
            "description" => "dog",
            "image" => "dog.jpg"
        ]);
        Category::create([
            "id" => "2",
            "name" => "cat",
            "description" => "cat",
            "image" => "cat.jpg"
        ]);
    }
}
