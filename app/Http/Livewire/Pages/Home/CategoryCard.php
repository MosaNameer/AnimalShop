<?php

namespace App\Http\Livewire\Pages\Home;

use Livewire\Component;

class CategoryCard extends Component
{
    public $category;

    public function mount($category)
    {
        $this->category = $category;
    }
    public function render()
    {
        return view('livewire.pages.home.category-card');
    }
}
