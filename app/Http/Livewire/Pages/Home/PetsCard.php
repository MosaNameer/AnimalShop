<?php

namespace App\Http\Livewire\Pages\Home;

use Livewire\Component;

class PetsCard extends Component
{
    public $pet;

    public function mount($pet)
    {
        $this->pet = $pet;
    }
    public function render()
    {
        return view('livewire.pages.home.pets-card');
    }
}
