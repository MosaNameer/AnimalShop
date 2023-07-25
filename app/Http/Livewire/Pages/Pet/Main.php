<?php

namespace App\Http\Livewire\Pages\Pet;

use App\Models\Category;
use App\Models\Pet;
use Livewire\Component;

class Main extends Component
{
    public $category_id;
    public $name, $age, $price, $gender, $category, $description, $breed, $color, $image;
    public $pet;
    public $categories;

    function addPet()
    {
        // add data to the database
        Pet::create([
            "name" => $this->name,
            "age" => $this->age,
            "price" => $this->price,
            "gender" => $this->gender,
            "category" => $this->category,
            "description" => $this->description,
            "breed" => $this->breed,
            "color" => $this->color,
            "image" => $this->image,
            "category_id" => $this->category_id,

        ]);
    }
    public function render()
    {
        $this->pet = Pet::all();
        $this->categories = Category::all();
        return view('livewire.pages.pet.main');
    }
}
