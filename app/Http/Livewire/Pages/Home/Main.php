<?php

namespace App\Http\Livewire\Pages\Home;

use Livewire\Component;

class Main extends Component
{
    public $categories;
    public $pets;
    public function mount()
    {
        // get three categories
        $this->categories = \App\Models\Category::take(3)->get();
        // get four pets
        $this->pets = \App\Models\Pet::take(4)->get();
    }
    public function render()
    {
        return view('livewire.pages.home.main');
    }
}
