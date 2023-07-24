<?php

namespace App\Http\Livewire\Pages\Pet;

use Livewire\Component;

class PetCard extends Component
{
    public $pet;
    public function render()
    {
        return view('livewire.pages.pet.pet-card');
    }
}
