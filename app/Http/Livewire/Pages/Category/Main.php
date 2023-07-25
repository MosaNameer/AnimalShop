<?php

namespace App\Http\Livewire\Pages\Category;

use App\Models\Category;
use Hamcrest\Description;
use Livewire\Component;

class Main extends Component
{
    public $name, $description, $image;
    public $category;


    function add(){
        // add data to the database
        Category::create([
            "name" => $this->name,
            "description" => $this->description,
            "image" => $this->image,
        ]);
    }
    public function render()
    {
        $this->category = Category::all();
        return view('livewire.pages.category.main');
    }
}
