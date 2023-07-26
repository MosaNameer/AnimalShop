<?php

namespace App\Http\Livewire\Pages\Pet;

use App\Models\Category;
use App\Models\Pet;
use Livewire\Component;
use Livewire\WithFileUploads;

class Main extends Component
{
    use WithFileUploads;
    public $name, $age, $price, $gender, $description, $breed, $color, $image, $category_id;
    public $pet;
    public $categories;



    function addPet()
    {

        $this->validate([
            'image' => 'image|max:1024', // 1MB Max
        ]);

        $this->image->store('photos', 'public');

        // add data to the database
        Pet::create([
            "name" => $this->name,
            "age" => $this->age,
            "price" => $this->price,
            "gender" => $this->gender,
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
