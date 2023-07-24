<?php

namespace App\Http\Livewire\Pages\Category;

use App\Models\Category;
use Livewire\Component;

class Main extends Component
{
    public $category;
    public function render()
    {
        $this->category = Category::all();
        return view('livewire.pages.category.main');
    }
}
