<?php

namespace App\Http\Livewire\Pages\Category;

use Livewire\Component;

class CategoryCard extends Component
{
    public $category;
    public function render()
    {
        return view('livewire.pages.category.category-card');
    }
}
