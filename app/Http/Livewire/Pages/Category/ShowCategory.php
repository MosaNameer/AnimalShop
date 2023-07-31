<?php

namespace App\Http\Livewire\Pages\Category;

use Livewire\Component;

class ShowCategory extends Component
{
    public $ID;
    public $pets;

    public function mount($id)
    {
        $this->ID = $id;
        // get pets by id
        $this->pets = \App\Models\Pet::where('category_id', $id)->get();
    }

    public function render()
    {
        return view('livewire.pages.category.show-category');
    }
}
